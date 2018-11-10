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
Route::get('/', 'PagesController@home');

//Route::get('/login', 'LoginController');
//Route::get('/register', 'Auth\RegisterController');


Route::get ('/d', 'PagesController@devlog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/blog', 'PagesController@home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('posts', 'IPostController@index');