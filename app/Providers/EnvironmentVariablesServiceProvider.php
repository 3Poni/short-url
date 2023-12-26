<?php

declare(strict_types=1);

namespace App\Providers;

use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;

class EnvironmentVariablesServiceProvider extends ServiceProvider
{

    public function register()
    {
        try {
            $env = Dotenv::createUnsafeImmutable(base_path());

            $env->load();
        } catch(InvalidPathException $e) {}
    }

    public function boot()
    {
        // TODO: Implement boot() method.
    }
}

