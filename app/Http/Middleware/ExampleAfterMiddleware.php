<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Psr\Http\Server\RequestHandlerInterface as Handle;
use Psr\Http\Message\ServerRequestInterface as Request;

class ExampleAfterMiddleware
{
    public function __invoke(Request $request, Handle $handler)
    {
        $response = $handler->handle($request);

        $response->getBody()->write("\n After Middleware");

        return $response;
    }
}

