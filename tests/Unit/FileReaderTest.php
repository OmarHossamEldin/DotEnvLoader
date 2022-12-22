<?php

use Reneknox\DotEnvLoader\File\Reader;
use PHPUnit\Framework\TestCase;

class FileReaderTest extends TestCase
{
    private string $samplesPath;

    protected function setUp(): void
    {
        $this->samplesPath = dirname(__DIR__) . '/../Samples/';
    }

    /** @test */
    public function file_not_supported()
    {
        $file = $this->samplesPath . '.test';
        $this->expectExceptionMessage('Not Supported File');
        Reader::read($file);
    }

    /** @test */
    public function file_not_found()
    {
        $file = $this->samplesPath . '.env.test.example';
        $this->expectExceptionMessage('File Not Found please create it');
        Reader::read($file);
    }

    /** @test */
    public function is_not_file()
    {
        $file = $this->samplesPath . '.env.example';
        $this->expectExceptionMessage("it's not a file please select the right one");
        Reader::read($file);
    }

    /** @test */
    public function read_env_success()
    {
        $file = $this->samplesPath . '.env.test';
        $file = Reader::read($file);
        $this->assertIsArray($file);
    }
}
