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

Route::get('foo', function () {
    return 'Hello World';
});

Route::get('demoone', 'BlogController@index');
Route::post('/demotwo', 'BlogController@demotwo');
Route::match(['get', 'post'], '/demothree', 'BlogController@demothree');
Route::any('/demofour', 'BlogController@demofour');

Route::resource('photos', 'PhotoController');
Route::resource('admin/users', 'Admin\UsersController');