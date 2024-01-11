<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Link;
use App\Support\Auth;
use App\Support\RequestInput;

class LinkController
{
    public function store(RequestInput $input, Auth $auth, Link $link)
    {
        // make check if USER is active
        $userId = $auth->checkAuth() ? $auth->getUserParam('id') : null;

        $short_string = $this->getRandomString(6);

        // add data to DB
        $link->create(
            [
                'redirect' => $input->url,
                'short_url' => $short_string,
                'user_id' => $userId,
                'expire_date' => date('m/d/Y h:i:s a', strtotime("+1 month", time())),
            ]
        );
        $auth->setData('link', $short_string);

        // show created link to user

        return redirect('/');
    }

    private function getRandomString($length = 10) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',(int) ceil($length/strlen($x)) )),1,$length);
    }

    public function redirect($url, Link $link): void
    {
        // make request from DB by link
        $res = $link->where('short_url', $url)->fetch();

        if($res) {
            header("Location: https://". $res['redirect']);
        }else {
            dd('Not found');
//            header('Location: /404');
        }
    }

}
