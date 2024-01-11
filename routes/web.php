<?php

declare(strict_types=1);

use App\Support\Route;


Route::get('/', 'HomeController@index');
Route::post('/', 'LinkController@store');

Route::get('/settings', 'Settings\MainController@index');
Route::get('/settings/url', 'Settings\UrlController@index');
Route::get('/settings/personal', 'Settings\PersonalController@index');

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@register');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');

Route::post('/logout', 'LogoutController@logout');

Route::get('/sh/{url}', 'LinkController@redirect');

//Route::get('/welcome/{name}/{id}', 'HomeController@show');