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
/*

    Get / (index)
    GET /d (devlog)
    GET /home (authenticated home user control panel)
    GET /admin (admin BREAD panel)
    GET /posts (herald index)
    GET /post/1 (herald show)
*/

Route::get('/', 'PagesController@home');


Route::get ('/d', 'PagesController@devlog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::resource('heralds', 'HeraldController');
