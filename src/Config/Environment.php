<?php

namespace Harvest\Config;

use Dotenv\Dotenv;

class Environment
{
    public function __construct(string $path)
    {
        $dotenv = Dotenv::create($path);
        $dotenv->load();
    }
}
