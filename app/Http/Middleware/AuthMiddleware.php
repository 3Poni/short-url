<?php

declare(strict_types=1);

namespace App\Http\Middleware;


use Slim\Container;
use Slim\Http\Request as Request;
use Slim\Http\Response as Response;

class AuthMiddleware
{
    /**
    * @param  \Psr\Http\Message\ServerRequestInterface $request  PSR7 request
    * @param  \Psr\Http\Message\ResponseInterface      $response PSR7 response
    * @param  callable                                 $next     Next middleware
    *
    * @return \Psr\Http\Message\ResponseInterface
    */
    public function __invoke(
        Request $request,
        Response $response,
        $next)
    {
        $session = $this->get('session');
        $session->start();
        $response = $next($request, $response);

        return $response;
    }
}