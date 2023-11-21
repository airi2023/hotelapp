<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation_detail;

class Reservation_detailController extends Controller
{
    public function index()
    {
        $items = Reservation_detail::all(); //テーブルに登録されているデータ項目を、モデル(単数形)を通じて、全て取得。

        return view('reservation_detail.index', ['items' => $items]); //①Reservation_detailフォルダのindex.blade.phpを呼び出す、⓶index.blade.phpの変数itemsに、変数itemsRoom::all();)を渡す
    }
}
