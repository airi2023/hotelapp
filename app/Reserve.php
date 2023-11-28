<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    // public function guest()
    // {
    //     return $this->belongsTo('App\User');
    // }

    // protected $fillable = ['guest_id','number_of_people','checkin','checkout','room_name'];
    protected $fillable = ['guest_id','number_of_people','checkin','checkout'];

    // 主キーにid以外の名前を付けているなら指定する
    protected $primaryKey = 'reserve_id';

    public function guest() //guest＝主テーブル名
    {
        //belongsTo(主テーブルの指定、従テーブルの外部キー、対応する主テーブルの主キー)
        return $this->belongsTo('App\Guest', 'guest_id', 'id'); //belongsTo＝予約テーブル(多)→利用者テーブル（1）にアクセスして、利用者モデルを取得・全項目を取得
    }

    // roomとの多対多のリレーション
    public function room() //room＝主テーブル名
    {
        // belongsToMany(相手のモデル（部屋）、中間テーブルの名前（予約明細）、中間テーブル上の自分のモデル（予約）の外部キー、中間テーブル上の相手のモデル（部屋）の外部キー)

        // 中間テーブル「予約明細」の、外部キー以外のカラム「stay_days」「fee」も表示
        return $this->belongsToMany('App\Room', 'reservation_details', 'reserve_id', 'room_id')->withPivot('stay_days', 'fee');
    }
    
}
