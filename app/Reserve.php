<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    // public function guest()
    // {
    //     return $this->belongsTo('App\User');
    // }

    // 主キーにid以外の名前を付けているなら指定する
    protected $primaryKey = 'reserve_id';

    public function guest() //guestsメソッドの定義
    {
        //belongsTo(主テーブルの指定、従テーブルの外部キー、対応する主テーブルの主キー)
        return $this->belongsTo('App\Guest', 'guest_id', 'id');
    }
}
