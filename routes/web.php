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

Route::get('/flat_ui/{name}','ComponentsController@parts');
Route::get('profile', 'ProfileController@index');
Route::post('profile/register/', 'ProfileController@register');
Route::get('official', 'FlatUIOfficialController@index');