<?php

declare(strict_types=1);

namespace App\Support;

class Auth
{
    public function setAuth(array $user): void
    {
        $_SESSION['user'] = $user;
    }

    public function setData(string $key, $param): void
    {
        $_SESSION[$key] = $param;
    }

    public function getData(string $key): mixed
    {
        return $_SESSION[$key] ?? false;
    }

    public function checkAuth(): bool
    {
        return isset($_SESSION['user']);
    }

    public function destroyAuth(): void
    {
        if($this->checkAuth()) {
            unset($_SESSION['user']);
        }
    }

    public function getUserParam(string $param)
    {
        return $_SESSION['user'][$param] ?? false;
    }
}

