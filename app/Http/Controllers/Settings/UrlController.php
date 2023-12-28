<?php

declare(strict_types=1);

namespace App\Http\Controllers\Settings;

use App\Helpers\RandomDataGenerator;
use App\Support\View;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class UrlController
{
    public function index(View $view)
    {
        return $view('settings.url');
    }
    public function show(
        ServerRequestInterface $request,
        ResponseInterface $response,
        $name
    )
    {
        $response->getBody()->write("Welcome {$name}");

        return $response;
    }
}

