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
    // return view('welcome');
    return view('layouts.hpbase');
});

Route::get('/top', function () { //デフォルトページ
    // return view('welcome');
    return view('layouts.hpbase');
});

Route::get('/guest', 'GuestController@index'); //利用者管理の一覧表示

Route::get('/guest/add', 'GuestController@add'); //利用者管理の追加機能
Route::post('/guest/add', 'GuestController@create'); //利用者管理の追加機能

Route::get('/reserve', 'ReserveController@index'); //予約管理の一覧表示
Route::get('/reserve/add', 'ReserveController@add'); //予約管理の追加機能
Route::post('/reserve/add', 'ReserveController@create'); //予約管理の追加機能


Route::get('/guest/edit', 'GuestController@edit');//更新ページに遷移した後の表示
Route::post('/guest/update', 'GuestController@update');//更新


Route::get('/reservation_detail', 'Reservation_detailController@index'); //予約明細の一覧表示

Route::get('/search', 'ReserveController@searchpage'); //予約検索ページ

// Route::post('/search', 'ReserveController@checkAvailability'); //予約検索
Route::post('/search', 'ReserveController@checkAvailability')->name('checkAvailability');//ルート名は 'checkAvailability' です。ビュー内(bladeのこと？)でリンクやフォームのアクションを指定する際には、この名前を使用する必要があります。

Route::get('/room', 'RoomController@index'); //部屋管理の一覧表示

Route::get('/roomtype', 'RoomtypeController@index');//部屋種別管理の一覧表示