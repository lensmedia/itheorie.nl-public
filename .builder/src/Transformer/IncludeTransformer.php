<?php

declare(strict_types=1);

namespace App\Transformer;

use RuntimeException;

class IncludeTransformer implements TransformerInterface
{
    private const PATTERN = '~\{\s*INCLUDE:([^\}]+)\s*\}~i';

    public function transform(string $content, string $filePath, string $sourcesRoot): string
    {
        return $this->transformRecursive($content, $filePath);
    }

    private function transformRecursive(string $content, string $filePath, array $fileStack = []): string
    {
        if (!preg_match(self::PATTERN, $content)) {
            return $content;
        }

        return preg_replace_callback(self::PATTERN, function ($matches) use ($filePath, $fileStack) {
            $fileToInclude = $matches[1];

            $targetFile = dirname($filePath).'/'.$fileToInclude;
            if (!is_file($targetFile)) {
                throw new RuntimeException(sprintf(
                    'Included file "%s" from file "%s" does not exist.%s',
                    $targetFile,
                    $filePath,
                    empty($fileStack) ? '' : PHP_EOL.implode(' -> ', $fileStack),
                ));
            }

            $content = trim(file_get_contents($targetFile));

            $fileStack[] = $filePath;

            return $this->transformRecursive($content, $targetFile, $fileStack);
        }, $content);
    }
}
