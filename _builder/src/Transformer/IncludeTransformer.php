<?php

namespace App\Transformer;

class IncludeTransformer implements TransformerInterface
{
    public function transform(string $content, string $fileName): string
    {
        dd($fileName);
    }
}
