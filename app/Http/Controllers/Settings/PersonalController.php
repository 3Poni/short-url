<?php

declare(strict_types=1);

namespace App\Http\Controllers\Settings;

use App\Helpers\RandomDataGenerator;
use App\Support\Auth;
use App\Support\View;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class PersonalController
{

    public function index(View $view, Auth $auth)
    {
        $data = $auth->getData('user');
        
        return $view('settings.personal', ['data' => $data]);
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

