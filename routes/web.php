<?php

declare(strict_types=1);

use App\Support\Route;


Route::get('/', 'HomeController@index');

Route::get('/register', 'RegisterController@show');
Route::post('/register', 'RegisterController@store');

Route::get('/welcome/{name}/{id}', 'HomeController@show');