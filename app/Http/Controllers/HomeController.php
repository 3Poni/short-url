<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Helpers\RandomDataGenerator;
use App\Support\View;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class HomeController
{
    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response
    )
    {
        $data = new RandomDataGenerator(
            [
                'names' => ['John', 'Bob', 'Gale', 'Tom', 'Chris', 'Jane', 'Richard']
        ]
        );
        $response->getBody()->write(json_encode($data->getData()));
        return $response->withHeader('content-type', 'application/json');
    }

    public function index(View $view)
    {

        return $view('index');
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

