<?php

namespace App\Transformer;

class IncludeTransformer
{
    private const PATTERN = '~\[\[INCLUDE:([^\]]+)\]\]~si';

    public static function transform(string $content, string $filePath): string
    {
        do {
            $content = preg_replace_callback(self::PATTERN, static function ($matches) use ($filePath) {
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
        } while (preg_match(self::PATTERN, $content));

        return $content;
    }
}
