<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;
use App\Roomtype;
use App\Room;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\reserves;

class ReserveController extends Controller
{
    // public function index()
    // {
    //     $items = Reserve::all(); //reservesテーブル(複数形)に登録されているデータ項目を、モデルReserve.php(単数形)を通じて、全て取得。

    //     return view('reserve.index', ['items' => $items]); //①reserveフォルダのindex.blade.phpを呼び出す、⓶index.blade.phpの変数itemsに、変数items(Reserve::all();)を渡す
    // }

    public function searchpage()
    {
        return view('search.index');
    }

    // public function checkAvailability(Request $request)
    // {
    //     // 入力データのバリデーション
    //     $request->validate([
    //         'room_type' => 'required',
    //     ]);

    //     // ユーザーが選択した条件
    //     $roomType = $request->input('room_type');

    //     // 結果をビューに渡す
    //     return view('search.index', [
    //         'roomType' => $roomType,
    //     ]);
    // }


    public function index(Request $request)
    {

        $items = Reserve::all(); //reservesテーブル(複数形)に登録されているデータ項目を、モデルReserve.php(単数形)を通じて、全て取得。

        return view('reserve.index', ['items' => $items]); //①reserveフォルダのindex.blade.phpを呼び出す、⓶index.blade.phpの変数itemsに、変数items(Reserve::all();)を渡す
        // DB::table(reserves)->whereDate(checkin, 'yyyy-mm-dd')->get();
    }


    public function add()
    {
        return view('reserve.add'); //表示する
    }

    public function create(Request $request)
    {
        $reserve = new reserve();
        $reserve->fill($request->all())->save();
        return redirect('reserve'); //reserveページにリダイレクトする
    }

}
