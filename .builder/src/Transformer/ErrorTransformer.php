<?php

declare(strict_types=1);

namespace App\Transformer;

use InvalidArgumentException;
use RuntimeException;

class ErrorTransformer implements TransformerInterface
{
    private const PATTERN = '~\{\s*ERROR:([a-z\d_]+)\s*\}(?:\(([a-z]+)(?:=(.+?))?\))?~i';
    private const TYPE_VALUES = ['id', 'code', 'message', 'description', 'format'];

    public function __construct(
        private readonly string $errorsFile,
    ) {
    }

    public function transform(string $content, string $filePath, string $sourcesRoot): string
    {
        return preg_replace_callback(self::PATTERN, function ($match) use ($filePath) {
            @[, $errorId, $returnType] = $match;

            if (null !== $returnType && !in_array($returnType, self::TYPE_VALUES, true)) {
                throw new InvalidArgumentException(sprintf(
                    '"%s" is not a valid argument value, available options are "%s" in "%s".',
                    $returnType,
                    '"'.implode('", "', self::TYPE_VALUES).'"',
                    $filePath,
                ));
            }

            try {
                $error = $this->error($errorId);
            } catch (RuntimeException) {
                throw new RuntimeException(sprintf(
                    'Unable to get error with id "%s" defined as "%s" in "%s".',
                    $errorId,
                    $match[0],
                    $filePath,
                ));
            }

            if (!isset($returnType)) {
                return sprintf(
                    '`%d` `%s` %s',
                    $error['code'],
                    $error['id'],
                    $error['description'] ?? $error['message']
                );
            }

            if ('format' === $returnType) {
                return str_replace(
                    ['{code}', '{id}', '{message}', '{description}'],
                    [$error['code'], $error['id'], $error['message'], $error['description']],
                    $match[3],
                );
            }

            return $error[$returnType];
        }, $content);
    }

    private function error(string $errorId): array
    {
        $errors = $this->errors();
        if (!isset($errors[$errorId])) {
            throw new RuntimeException(sprintf(
                'Unable to transform ErrorCode "%d".',
                $errorId,
            ));
        }

        return $errors[$errorId];
    }

    private function errors(): array
    {
        static $errors = [];
        if (empty($errors)) {
            $errors = json_decode(file_get_contents($this->errorsFile), true, 512, JSON_THROW_ON_ERROR);
        }

        return $errors;
    }
}
