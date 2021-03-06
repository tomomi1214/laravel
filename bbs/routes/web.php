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
// /というアクセスがあったらWelcomeブレイドを表示させる
//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', 'MessagesController@index');
Route::resource('messages', 'MessagesController');
// HTTPS接続でアセット(CSSや画像など)を読み込むため//おまじない
if (env('APP_ENV') === 'local') {
    URL::forceScheme('https');
};
