<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Support\RequestInput;
use App\Support\View;

class RegisterController
{
    public function show(View $view)
    {
        return $view('auth.register');
    }

    public function store(RequestInput $input)
    {
        if($input->password != $input->confirm_password) {
            dd("Password and confirm password do not match");
        }

        $input->forget('confirm_password');
        $input->password = sha1($input->password);

        if(User::where('email', $input->email)->exists()) {
            dd("User with {$input->email} already exists");
        }

        $user = User::forceCreated($input->all());
        dd($input->all());
        return redirect('/');
    }

}
