<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Support\Auth;
use App\Support\RequestInput;
use App\Support\View;

class LogoutController
{

    public function logout(Auth $auth)
    {
        $auth->destroyAuth();

//        dd("You are logged out!");
        return redirect('/');
    }

}
