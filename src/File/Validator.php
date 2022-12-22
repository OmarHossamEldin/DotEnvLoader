<?php

namespace Reneknox\DotEnvLoader\File;

class Validator
{
    public static function file_support(string $file): bool
    {
        return (bool)stristr($file, '.env');
    }

    public static function file_found(string $file): bool
    {
        return file_exists($file);
    }

    public static function is_file(string $file): bool
    {
        return is_file($file);
    }

    public static function validate_content(array $file): array
    {
        return array_filter($file, function ($line) {
            if ($line === PHP_EOL) return;
            if (stristr($line, '#')) return;
            return $line;
        });
    }
}