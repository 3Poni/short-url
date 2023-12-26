<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class ApiController
{
    public function index($response)
    {
        $response->getBody()->write(json_encode([
            'hello' => 'world'
        ], JSON_PRETTY_PRINT));

        return $response;
    }
}