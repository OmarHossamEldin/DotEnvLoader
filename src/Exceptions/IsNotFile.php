<?php

namespace Reneknox\DotEnvLoader\Exceptions;

class IsNotFile extends \Exception
{
    protected $message = "it's not a file please select the right one";
}