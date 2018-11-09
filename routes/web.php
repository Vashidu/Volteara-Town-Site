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


Route::get('/d', function () {
    $tasks = [
        'Create basic layout',
        'Create User panel',
        'Create post management between user auth and guest'
    ];
    
    return view('d', [
        'tasks' => $tasks
    ]);
});
