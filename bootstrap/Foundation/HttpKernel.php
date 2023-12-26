<?php

declare(strict_types=1);

namespace Boot\Foundation;

class HttpKernel extends Kernel
{

    /**
     * @var array Global Middleware
     */
    public array $middleware = [];


    /**
    * Route Group Middleware
    */
    public array $middlewareGroups = [
        'api' => [],
        'web' => []
    ];

    public array $bootstrap = [
        Bootstrappers\LoadEnvironmentVariables::class,
        Bootstrappers\LoadDebuggingPage::class,
        Bootstrappers\LoadHttpMiddleware::class,
        Bootstrappers\LoadServiceProviders::class,
    ];
}
