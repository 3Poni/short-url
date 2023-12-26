<?php

declare(strict_types=1);

namespace App\Providers;

class ErrorMiddlewareServiceProvider extends ServiceProvider
{

    public function register()
    {
//        if ( $value = getenv('APP_DEBUG') )
//      throw_when($value and !default, "{$key} is not a defined .env variable" );

        $settings = $this->app->getContainer()->get('settings');
        $this->app->addErrorMiddleware(
            $settings['displayErrorDetails'],
            $settings['logErrors'],
            $settings['logErrorDetails']
        );
    }

    public function boot()
    {
        require __DIR__ . '/../../routes/routes.php';
    }
}

