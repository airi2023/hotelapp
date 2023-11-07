<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class GuestController extends Controller
{
    public function index()
    {
        $items = Guest::all();//guestsテーブル(複数形)に登録されているデータ項目を、モデルGuest.php(単数形)を通じて、全て取得。

        return view('guest.index',['guests' => $items]);//①guestフォルダのindex.blade.phpを呼び出す、⓶変数guestsに変数items(Guest::all();)を渡す
    }

    public function add()
    {
        return view('guest.add');//表示する
    }

    public function create(Request $request)
    {
        $guest = new guest();
        $guest->fill($request->all())->save();
        return redirect('guest');//guestページにリダイレクトする
    }
}