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
Route::get('/search', 'WelcomeController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
Route::get('/home/search', 'HomeController@search')->middleware('auth')->name('search');

Route::get('/user/{id}', 'UserController@show')->middleware('auth')->name('profile');
Route::get('/user/{id}/edit', 'UserController@edit')->middleware('auth')->name('users.edit');
Route::post('/user/update', 'UserController@update')->middleware('auth')->name('users.update');
//あとでグループ化してリファクタリング
Route::post('{user}/delete', 'UserController@delete')->middleware('auth')->name('delete');

Route::get('/item_form', 'ItemController@show')->middleware('auth')->name("Item_form"); //商品情報入力画面
Route::post('/upload', 'ItemController@upload')->middleware('auth')->name("upload_item");
// Route::get('/my_item', 'ItemController@my_item')->name("my_item");

Route::get('/home/{id}', 'ItemController@detail')->middleware('auth'); 
Route::get('/home/{id}/item_edit', 'ItemController@item_edit')->middleware('auth'); 
Route::post('/home/{id}/item_update','ItemController@item_update')->middleware('auth');
Route::post('/home/{id}/item_delete','ItemController@item_delete')->middleware('auth');

// Route::get('{id}/chat', 'ChatController@index');
//Route::post('{id}/chat/create', 'ChatController@createMessage')->name("create_message"); 

//Route::get('/sample', 'ChatController@sample'); 
//Route::get('/sample2', 'ChatController@sample2'); 

Route::post('/pay', 'PaymentController@pay');

Route::get('/message/{any?}', fn() => view('message'))->where('any', '.+');








