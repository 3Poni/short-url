<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Support\RequestInput;
use App\Support\View;

class RegisterController
{
    public function index(View $view)
    {
        return $view('auth.register');
    }

    public function register(RequestInput $input, User $user)
    {
        if($input->password != $input->confirm_password) {
            dd("Password and confirm password do not match");
        }

        $input->forget('confirm_password');
        $input->password = password_hash($input->password, PASSWORD_DEFAULT);

        if($user->where('email', $input->email)->fetch()) {
            dd("User with {$input->email} already exists");
        }

        if($user->create($input->all())) {
            dd("Account created successfully");
        }

        return redirect('/register');
    }

}
