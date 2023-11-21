<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation_detail extends Model
{
    // 主キーにid以外の名前を付けているなら指定する
    protected $primaryKey = 'reservation_detail_id';

    public function reserve() //主テーブル（参照したいテーブル）
    {
        //belongsTo(主テーブルの指定、従テーブルの外部キー、対応する主テーブルの主キー)
        return $this->belongsTo('App\Reserve', 'reserve_id', 'reserve_id');
    }

    public function room() //主テーブル（参照したいテーブル）
    {
        //belongsTo(主テーブルの指定、従テーブルの外部キー、対応する主テーブルの主キー)
        return $this->belongsTo('App\Room', 'room_id', 'room_id');
    }
}
