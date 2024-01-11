<?php

declare(strict_types=1);

namespace App\Http\Middleware;


use Slim\Container;
use Psr\Http\Server\RequestHandlerInterface as Handle;
use Psr\Http\Message\ServerRequestInterface as Request;

class AuthMiddleware
{
    /**
    * @param  \Psr\Http\Message\ServerRequestInterface $request  PSR7 request
    * @param  \Psr\Http\Message\ResponseInterface      $response PSR7 response
    * @param  callable                                 $next     Next middleware
    *
    * @return \Psr\Http\Message\ResponseInterface
    */
    public function __invoke(Request $request, Handle $handler)
    {
        session_start();
//        $session = $this->get('session');
//        $session->start();

        return $handler->handle($request);
    }
}