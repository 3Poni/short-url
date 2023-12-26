<?php

declare(strict_types=1);

use Boot\Foundation\AppFactoryBridge as App;
use DI\Container;
use App\Http\HttpKernel;

$app = App::create(new Container);

$_SERVER['app'] = &$app;

if (!function_exists('app'))
{
    function app()
    {
        return $_SERVER['app'];
    }
}

$app->addRoutingMiddleware();

return HttpKernel::bootstrap($app)->getApplication();



//chdir(dirname(__DIR__));

//$container = new Container();

//$settings = require  'config/settings.php';
//$settings($container);

//$connection = require 'config/connection.php';
//$connection($container);

//$logger = require 'config/logger.php';
//$logger($container);

// Set Container on app
//$app = SlimAppFactory::create($container);

//ServiceProvider::setup($app, require '../config/app.php'['providers']);

//==================
//$app = AppFactory::create();
//$app->addErrorMiddleware(true, true, true);
//
//$views = require 'config/views.php';
//$views($app);
//
//$middleware = require 'config/middleware.php';
//$middleware($app);
//
//$routes = require 'routes/routes.php';
//$routes($app);
//
//$app->run();
