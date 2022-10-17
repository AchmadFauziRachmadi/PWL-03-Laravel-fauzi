<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    return 'Hello World';
});

Route::get('/test2', function () {
    return 'Hello World Hello World Hello World Hello World';
});

Route::redirect('/test', '/test2');

Route::view('greeting', 'greeting', ['name' => 'fauzi', 'kelas' => 'if-b 20']);

Route::get('/user/{id}', function ($id) {
    return "User ".$id;
});

Route::get('/user/{name?}', function ($name = null) {
    return "Hai ".$name;
});

Route::get('/user/{name}', function ($name) {
    return 'Hai '.$name.'...!';
})->where('name', '[A-Za-z]+');

Route::get('/user/profile', function(){
    return "Hello There...";
})->name('profile');