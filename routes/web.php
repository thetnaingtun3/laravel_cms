<?php

Route::get('/', 'HomeController@index');
Route::get('/post/{slug}', 'PostController@detail')->name('post.detail');
Route::get('/post/category/{slug}', 'PostController@postByCategory')->name('post.category');
Route::get('/post/tag/{slug}', 'PostController@postByTag')->name('post.tag');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('category', 'CategoryController');
    Route::resource('post', 'PostController');
    Route::resource('tag', 'TagController');
    Route::resource('home', 'HomeController');


    Route::get('user/{id}', 'UserController@edit');
    Route::get('user/{id}', 'UserController@add');
    Route::post('user/{id}', 'UserController@update');
    Route::get('user', 'UserController@index');
    Route::get('user/add/new', 'UserController@create')->name('user.c');
    Route::post('user/add/new', 'UserController@store')->name('user.store');
    Route::get('user/role/edit/{role}/{user_id}', 'UserController@editRole')->name('user.edit.role')->middleware('Admin');
Route::get('user/{id}','UserController@updat');
});


//Route::get('/', function () {
//    return view('index');
//});
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => true, // Email Verification Routes...
]);



