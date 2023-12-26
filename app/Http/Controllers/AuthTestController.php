<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface;

class AuthTestController
{
    public function __invoke(ResponseInterface $response)
    {
        $response->getBody()->write("You shouldn't see it!!!");
    }

}

