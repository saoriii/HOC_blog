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


// Route users admin
Route::resource('admin/users', 'AdminUsersController');

// Route posts admin
Route::resource('admin/posts', 'AdminPostsController');

// Route posts visiteurs
Route::resource('posts', 'PostsController', ['only' =>[
    'index', 'show'
]]);

// Route categories visiteurs
Route::resource('categories', 'CategoriesController', ['only' =>[
    'index', 'show'
]]);

// Route medias
Route::get('admin/medias', 'AdminMediasController@index');

Route::get('admin/medias/{medias}/edit', 'AdminMediasController@edit');

Route::get('admin/medias/upload', 'AdminMediasController@upload');

Route::delete('admin/medias/{medias}', 'AdminMediasController@destroy');

Route::post('admin/medias', 'AdminMediasController@store');

Route::match(['put', 'patch'], 'admin/medias/{medias}', 'AdminMediasController@update');

// Route catgories
Route::resource('admin/categories', 'AdminCategoriesController');

// Route comments
Route::resource('/admin/comments', 'AdminCommentsController', ['only' => ['index', 'edit', 'update']]);

// Route admin 
Route::get("/admin", "AdminController@dashboard");

// Route home
Route::get("/", "HomeController@affichHome");



