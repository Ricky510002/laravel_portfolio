<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/request', 'ChatController@sendReqest'); 

Route::get('/ajax/chat/{id}', 'Ajax\ChatController@getMessages'); // 自分のメッセージを取得
//Route::get('/ajax/chat/you/{id}', 'Ajax\ChatController@getYourMessages'); // 相手のメッセージを取得
Route::post('/ajax/chat/{id}', 'Ajax\ChatController@create'); // メッセージ送信

