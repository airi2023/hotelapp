<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;

class ReserveController extends Controller
{
    public function index()
    {
        $items = Reserve::all();//reservesテーブル(複数形)に登録されているデータ項目を、モデルReserve.php(単数形)を通じて、全て取得。

        return view('reserve.index',['items' => $items]);//①reserveフォルダのindex.blade.phpを呼び出す、⓶index.blade.phpの変数itemsに、変数items(Reserve::all();)を渡す
    }
}
