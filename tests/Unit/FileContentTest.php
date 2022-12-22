<?php

namespace tests\Unit;

use PHPUnit\Framework\TestCase;
use Reneknox\DotEnvLoader\File\Reader;

class FileContentTest extends TestCase
{
    private array $file;

    protected function setUp(): void
    {
        $file = dirname(__DIR__) . '/../Samples/.env.test';
        $this->file = Reader::read($file);
    }

    /** @test */
    public function has_key_email_valid_value()
    {
        $this->assertIsArray($this->file);
        $this->assertArrayHasKey('EMAIL', $this->file);
        $this->assertEquals('test@test.com', $this->file['EMAIL']);
    }

    /** @test */
    public function not_has_commented_key()
    {
        $this->assertIsArray($this->file);
        $this->assertArrayNotHasKey('#TEST', $this->file);
        $this->assertArrayNotHasKey('#key', $this->file);
    }
}