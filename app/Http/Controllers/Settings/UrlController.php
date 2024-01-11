<?php

declare(strict_types=1);

namespace App\Http\Controllers\Settings;

use App\Helpers\RandomDataGenerator;
use App\Models\Link;
use App\Support\Auth;
use App\Support\View;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class UrlController
{
    public function index(View $view, Link $link, Auth $user)
    {
        $data = $link->where('user_id', $user->getUserParam('id'))->fetchAll();

        return $view('settings.url', ['data' => $data]);
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

