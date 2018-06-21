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



Route::get('admin/medias', 'AdminMediasController@index');

Route::get('admin/medias/{medias}/edit', 'AdminMediasController@edit');

Route::get('admin/medias/upload', 'AdminMediasController@upload');

Route::delete('admin/medias/{medias}', 'AdminMediasController@destroy');

Route::post('admin/medias', 'AdminMediasController@store');

Route::put('admin/medias/{medias}', 'AdminMediasController@update');




Route::resource('admin/categories', 'AdminCategoriesController');