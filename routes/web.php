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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('category', 'CategoryController');
    Route::resource('post', 'PostController');
    Route::resource('tag','TagController');

    Route::get('user/{id}','UserController@edit');
    Route::post('user/{id}','UserController@update');
    Route::get('user','UserController@index');
    Route::get('user/add/new','UserController@create')->name('user.c');
    Route::post('user/add/new','UserController@store')->name('user.store');
    Route::get('user/role/edit/{role}/{user_id}','UserController@editRole')->name('user.edit.role')->middleware('Admin');

});



Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


