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

Route::get('/', 'WelcomeController@show')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/{id}', 'UserController@show');

Route::get('me', 'UserController@edit')->middleware('auth');
Route::post('me', 'UserController@update')->middleware('auth')->name('users.update');
//あとでグループ化してリファクタリング

Route::get('/form', 'ItemController@show')->name("Item_form"); //商品情報入力画面
Route::post('/upload', 'ItemController@upload')->name("upload_image");


