<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Helpers\RandomDataGenerator;
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

    public function index(ServerRequestInterface $request,
                          ResponseInterface $response)
    {
        $response->getBody()->write('Welcome to home controller');
        return $response;
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

