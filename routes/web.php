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

Route::resource('comments', 'AdminCommentsController', ['only' => ['index', 'edit', 'delete']]);

Route::get("/admin", "AdminController@dashboard");

Route::get("/home", "HomeController@affichHome");
