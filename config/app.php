<?php

declare(strict_types=1);

return [
    'name' => env('APP_NAME', 'Slim 4 Auth App'),
    'providers' => [
//        \App\Providers\EnvironmentVariablesServiceProvider::class,
        \App\Providers\BladeServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,
//        \App\Providers\ErrorMiddlewareServiceProvider::class,
    ]
];