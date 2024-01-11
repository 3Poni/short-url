<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Support\Auth;
use App\Support\RequestInput;
use App\Support\View;

class LoginController
{
    public function index(View $view)
    {
        return $view('auth.login');
    }

    public function login(RequestInput $input, User $user, Auth $auth)
    {
        $userData = $user->where('login', $input->login)->fetch();
        if(!$userData || !password_verify($input->password, $userData['password']) ) {
            dd("Wrong credentials");
        }
        unset($userData['password']);
        $auth->setAuth($userData);

//        dd("You are logged in!");

        return redirect('/');
    }

}
