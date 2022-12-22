<?php

namespace Reneknox\DotEnvLoader;

use Reneknox\DotEnvLoader\File\Reader;

class EnvLoader
{
    private array $data = [];

    public function __construct(string $path, string $file)
    {
        $this->set_data(Reader::read($path . $file));
    }

    /**
     * @param array $data
     */
    private function set_data(array $data): void
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function get_data(): array
    {
        return $this->data;
    }

    public static function load_data(string $path, string $file): array
    {
        return (new envLoader($path, $file))->get_data();
    }
}