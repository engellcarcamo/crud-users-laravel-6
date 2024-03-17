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

Route::get('/users', function () {
    return 'User list';
});
Route::get('users/{id}', function ($id) {
    return "showing user detail: $id";
})->where('id', '[0-9]+');

Route::get('/users/new', function () {
    return ('Create a new user');
});

Route::get('/users/{id}/edit', function ($id) {
    return "Edit the user with id: $id";
})->where('id', '[0-9]+');

Route::get('/greeting/{name}/{nickname?}', function ($name, $nickname = null) {
    $name = ucfirst($name);
    if (!$nickname) {
        return "Welcome $name";
    }
    return "Welcome $name $nickname";
});
