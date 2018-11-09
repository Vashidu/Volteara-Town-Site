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
Route::get('/user', 'UserController@index');
//Route::get('/login', 'LoginController');
//Route::get('/register', 'Auth\RegisterController');
route::get('/dev', function () {
	return view('dev.welcome');
	});
Route::get('/d', function () {
    return view('dev.test');
});