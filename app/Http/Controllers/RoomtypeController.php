<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roomtype;

class RoomtypeController extends Controller
{
    public function index()
    {
        $items = Roomtype::all(); //テーブル(複数形)に登録されているデータ項目を、モデル(単数形)を通じて、全て取得。

        return view('roomtype.index', ['items' => $items]); //①roomフォルダのindex.blade.phpを呼び出す、⓶index.blade.phpの変数itemsに、変数itemsRoom::all();)を渡す
    }
}
