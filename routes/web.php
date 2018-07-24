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
    return view('home');
});

//route admin regroupees
Route::group(['middleware' => 'auth'], function(){
        // Route users admin
    Route::resource('admin/users', 'AdminUsersController');


    // Route posts admin
    Route::resource('admin/posts', 'AdminPostsController');

        // Route medias
    Route::get('admin/medias', 'AdminMediasController@index')->name('medias.index');

    Route::get('admin/medias/{medias}/edit', 'AdminMediasController@edit')->name('medias.edit');

    Route::get('admin/medias/upload', 'AdminMediasController@upload')->name('medias.upload');

    Route::delete('admin/medias/{medias}', 'AdminMediasController@destroy')->name('medias.destroy');

    Route::post('admin/medias', 'AdminMediasController@store')->name('medias.store');

        // Route catgories
    Route::resource('admin/categories', 'AdminCategoriesController');

    // Route comments
    Route::resource('/admin/comments', 'AdminCommentsController', ['only' => ['index', 'edit', 'update', 'destroy']]);

    // Route admin 
    Route::get("/admin", "AdminController@dashboard")->name('dashboard');

    Route::match(['put', 'patch'], 'admin/medias/{medias}', 'AdminMediasController@update')->name('medias.update');

});


Route::post('posts/comments/{id}', 'PostsController@comments')->name('posts.comments');
// Route posts visiteurs
Route::resource('posts', 'PostsController', ['only' => ['index', 'show'],
                                            'as' => 'visiteurs'
                                            ]
);

// Route categories visiteurs
Route::resource('categories', 'CategoriesController', ['only' =>['index', 'show'],
                                            'as' => 'visiteurs'
                                            ]

);






//// Route home
//Route::get("/", "HomeController@affich");




Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout','AdminController@logout')->name('logout');