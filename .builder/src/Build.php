<?php

namespace App;

use App\Transformer\IncludeTransformer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;

class Build extends Command
{
    public const EXCLUDE_DOCS = [
        'connect-api/schemas',
        'connect-api/old',
    ];

    protected static $defaultName = 'build';

    private string $sourceDirectory;
    private string $outputDirectory;

    public function __construct(
        private readonly Filesystem $filesystem,
    ) {
        parent::__construct(self::$defaultName);

        $rootDirectory = str_replace('\\', '/', dirname(__DIR__, 2));
        $this->sourceDirectory = $rootDirectory.'/.src';
        $this->outputDirectory = $rootDirectory;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $files = $this->files($this->sourceDirectory.'/*.md');
        foreach ($files as $file) {
            $content = file_get_contents($file);

            // Yes this is bad, it's a regex replace on the entire file content
            // instead of proper parsing, you go write the parser im lazy for
            // something this simple. This becomes more important when we have
            // many things to do.
            $content = IncludeTransformer::transform($content, $file);

            $outputPath = str_replace($this->sourceDirectory, $this->outputDirectory, $file);
            $this->filesystem->dumpFile($outputPath, $content);
        }

        return Command::SUCCESS;
    }

    private function files(string $pattern, int $flags = 0): array
    {
        foreach (self::EXCLUDE_DOCS as $excluded) {
            if (str_starts_with($pattern, $this->sourceDirectory.'/'.ltrim($excluded, '\\/'))) {
                return [];
            }
        }

        $files = array_filter(glob($pattern, $flags), 'is_file');

        $subdirectories = [];
        foreach (glob(dirname($pattern).'/*', GLOB_ONLYDIR | GLOB_NOSORT) as $dir) {
            $subdirectories[] = $this->files($dir.'/'.basename($pattern), $flags);
        }

        return array_merge($files, ...$subdirectories);
    }
}
