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

Route::get('/', function () { //デフォルトページ
    return view('welcome');
});


Route::get('/guest', 'GuestController@index'); //利用者管理の一覧表示

Route::get('/guest/add', 'GuestController@add'); //利用者管理の追加機能
Route::post('/guest/add', 'GuestController@create'); //利用者管理の追加機能

Route::get('/reserve', 'ReserveController@index'); //予約管理の一覧表示

Route::get('/room', 'GuestController@index'); //部屋管理の一覧表示

Route::get('/roomtype', 'GuestController@index');//部屋種別管理の一覧表示