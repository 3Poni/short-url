<?php

declare(strict_types=1);

namespace Boot\Foundation\Bootstrappers;

use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;

class LoadEnvironmentVariables extends Bootstrapper
{
    public function boot()
    {
        try {
            $env = Dotenv::createUnsafeImmutable(base_path());

            $env->load();
        } catch(InvalidPathException $e) {}
    }
}

