<?php

declare(strict_types=1);

namespace App\Transformer;

interface TransformerInterface
{
    public function transform(string $content, string $filePath, string $sourcesRoot): string;
}
