<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    // 主キーにid以外の名前を付けているなら指定する
    protected $primaryKey = 'room_id';

    public function roomtype() //主テーブル（参照したいテーブル）
    {
        //belongsTo(主テーブルの指定、従テーブル(reserveテーブル)の外部キー、対応する主テーブルの主キー)
        return $this->belongsTo('App\Roomtype', 'roomtype_id', 'roomtype_id');
    }

    // // Room モデルと Reserve モデルの1対多の関係を定義
    // public function reserves()
    // {
    //     return $this->hasMany(Reserve::class);
    // }
}
