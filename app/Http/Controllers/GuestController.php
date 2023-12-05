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


    // public function add()
    // {
    //     return view('guest.add'); //表示する
    // }

    public function create(Request $request)
    {
        $guest = new guest();
        $guest->fill($request->all())->save();
        return redirect('guest'); //guestページにリダイレクトする
    }


    //更新-----------------------------------------
    public function edit(Request $request)
    {
        $guest = Guest::find($request->id);//finf()は1つしかデータ取得しない！＝変数も単数形が正しい
        // dd($guest);//変数guestの中身確認
        return view('guest.guestedit', [
            'guest' => $guest
        ]);
    }

    public function update(Request $request)
    {
        // $this->validate($request, Guest::$rules); // バリデーションの実行
        $guest = Guest::find($request->id); //入力された(ボタンクリックされた)idの値を取得して、変数$guestに代入
        $guest->fill($request->all())->save(); //変数$guestに、フォームに入力された値を保存する
        return redirect('/guest');
    }
}