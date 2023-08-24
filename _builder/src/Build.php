<?php

namespace App;

use App\Transformer\TransformerInterface;
use App\Transformer\IncludeTransformer;
use RuntimeException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Build extends Command
{
    private const DIRECTIVES = [
        'include' => IncludeTransformer::class,
    ];

    protected static $defaultName = 'build';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $rootDirectory = str_replace('\\', '/', dirname(__DIR__, 2));
        $inputDirectory = $rootDirectory.'/_docs';
        $outputDirectory = $rootDirectory;

        $files = $this->files($inputDirectory.'/*.md');

        foreach ($files as $file) {
            $content = file_get_contents($file);

            foreach (self::DIRECTIVES as $class) {
                $content = $this
                    ->transformer($class)
                    ->transform($content, $file);
            }

            $outputPath = str_replace($inputDirectory, $outputDirectory, $file);
            $outputDirectory = dirname($outputPath);

            if (!is_dir($outputDirectory) && !mkdir($outputDirectory, 0777, true) && !is_dir($outputDirectory)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $outputDirectory));
            }

            file_put_contents($outputPath, $content);
        }

        return Command::SUCCESS;
    }

    private function files(string $pattern, int $flags = 0): array
    {
        $files = array_filter(glob($pattern, $flags), 'is_file');

        $subdirectories = [];
        foreach (glob(dirname($pattern).'/*', GLOB_ONLYDIR | GLOB_NOSORT) as $dir) {
            $subdirectories[] = $this->files($dir.'/'.basename($pattern), $flags);
        }

        return array_merge($files, ...$subdirectories);
    }

    private function transformer(string $class): TransformerInterface
    {
        static $instances = [];
        if (empty($instances[$class])) {
            if (!is_a($class, TransformerInterface::class, true)) {
                throw new RuntimeException(sprintf(
                    'Transformer needs to implement "%s"',
                    TransformerInterface::class,
                ));
            }

            $instances[$class] = new $class($this);
        }

        return $instances[$class];
    }
}
