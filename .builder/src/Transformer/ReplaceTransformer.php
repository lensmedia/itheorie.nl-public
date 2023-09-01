<?php

declare(strict_types=1);

namespace App\Transformer;

class ReplaceTransformer implements TransformerInterface
{
    public function __construct(
        private readonly array $replacements,
    ) {
    }

    public function transform(string $content, string $filePath, string $sourcesRoot): string
    {
        foreach ($this->replacements as $regex => $replacement) {
            $content = preg_replace($regex, $replacement, $content);
        }

        return $content;
    }
}
