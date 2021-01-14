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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/api/validate/{key}', 'PlayerController@validate_key')->name('validate_key');
Route::get('/api/register', 'PlayerController@register_key')->name('register_key');
Route::get('/api/scoreboard/get', 'PlayerController@scoreboard_get')->name('scoreboad_get');
