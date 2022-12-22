<?php

namespace Reneknox\DotEnvLoader\Exceptions;

class FileNotFound extends \Exception
{
    protected $message = 'File Not Found please create it';
}
