<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', 'UserController@index');

Route::get('users/{id}', 'UserController@show')
    ->where('id', '[0-9]+');

Route::get('/users/new', 'UserController@create');

Route::get('/users/{id}/edit', 'UserController@edit')
    ->where('id', '[0-9]+');

Route::get('/greeting/{name}/{nickname?}', 'WelcomeUserController');
