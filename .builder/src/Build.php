<?php

namespace App;

use App\Transformer\TransformerInterface;
use App\Transformer\IncludeTransformer;
use RuntimeException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;

class Build extends Command
{
    protected static $defaultName = 'build';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $rootDirectory = str_replace('\\', '/', dirname(__DIR__, 2));
        $inputDirectory = $rootDirectory.'/.docs';
        $outputDirectory = $rootDirectory;

        $files = $this->files($inputDirectory.'/*.md');
        foreach ($files as $file) {
            $content = file_get_contents($file);

            // Yes this is bad, it's a regex replace on the entire file content
            // instead of proper parsing, you go write the parser im lazy for
            // something this simple. This becomes more important when we have
            // many things to do.
            $content = IncludeTransformer::transform($content, $file);

            $outputPath = str_replace($inputDirectory, $outputDirectory, $file);
            $this->filesystem()->dumpFile($outputPath, $content);
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

    public function filesystem(): Filesystem
    {
        static $filesystem;
        if (empty($filesystem)) {
            $filesystem = new Filesystem();
        }

        return $filesystem;
    }
}
