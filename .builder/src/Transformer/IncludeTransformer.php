<?php

namespace App\Transformer;

class IncludeTransformer implements TransformerInterface
{
    public static function transform(string $content, string $filePath): string
    {
        return preg_replace_callback('~\[\[INCLUDE:([^\]]+)\]\]~si', static function ($matches) use ($filePath) {
            $fileToInclude = $matches[1];

            $targetFile = dirname($filePath).'/'.$fileToInclude;
            if (!is_file($targetFile)) {
                throw new \RuntimeException(sprintf(
                    'Included file "%s" from file "%s" does not exist.',
                    $targetFile,
                    $filePath,
                ));
            }

            return file_get_contents(trim($targetFile));
        }, $content);
    }
}
