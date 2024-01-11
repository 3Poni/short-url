<?php

declare(strict_types=1);

namespace App\Http;

use Boot\Foundation\HttpKernel as Kernel;
class HttpKernel extends Kernel
{
    /**
     * @var array Global Middleware
     */
    public array $middleware = [

    ];


    /**
     * Route Group Middleware
     */
    public array $middlewareGroups = [
        'api' => [
            Middleware\ExampleBeforeMiddleware::class,
            Middleware\ExampleAfterMiddleware::class
//            LimitRequestsToSixtyPerMinuteMiddleware::class,
//            FormatResponseAsJsonRequestMiddleware::class
        ],
        'web' => [
            Middleware\RouteContextMiddleware::class,
            Middleware\AuthMiddleware::class,
        ]
    ];

}

