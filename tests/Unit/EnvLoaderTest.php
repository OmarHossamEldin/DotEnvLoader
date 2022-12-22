<?php

namespace tests\Unit;

use PHPUnit\Framework\TestCase;
use Reneknox\DotEnvLoader\EnvLoader;
use Reneknox\DotEnvLoader\File\Reader;

class EnvLoaderTest extends TestCase
{
    private string $path;

    private string $file;

    protected function setUp(): void
    {
        $this->path = dirname(__DIR__) . '/../Samples/';
        $this->file = '.env.test';
    }
    /** @test */
    public function load_configs_successfully_using_object()
    {
        $envLoader = new EnvLoader($this->path, $this->file);
        $this->assertIsArray($envLoader->get_data());
    }
    /** @test */
    public function load_configs_successfully_using_statically()
    {
        $configs = EnvLoader::load_data($this->path, $this->file);
        $this->assertIsArray($configs);
    }
}