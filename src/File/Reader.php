<?php

namespace Reneknox\DotEnvLoader\File;

use Reneknox\DotEnvLoader\Exceptions\NotSupportedFile;
use Reneknox\DotEnvLoader\Exceptions\FileNotFound;
use Reneknox\DotEnvLoader\Exceptions\IsNotFile;

class Reader
{
    public static function read(string $file): array
    {
        if (!Validator::file_support($file)) {
            throw new NotSupportedFile();
        }
        if (!Validator::file_found($file)) {
            throw new FileNotFound();
        }
        if (!Validator::is_file($file)) {
            throw new IsNotFile();
        }
        $file = self::load($file);
        $file = Validator::validate_content($file);
        return self::prepare_values($file);
    }

    private static function load(string $file): array
    {
        return file($file);
    }

    private static function prepare_values(array $lines): array
    {
        $file = [];
        foreach ($lines as $line) {
            [$key, $value] = explode('=', $line);
            $file[$key] = trim($value);
        }
        return $file;
    }
}
