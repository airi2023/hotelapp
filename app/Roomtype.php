<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roomtype extends Model
{
    // 主キーにid以外の名前を付けているなら指定する
    protected $primaryKey = 'roomtype_id';

    protected $fillable = ['roomtype_name', 'number_of_guests'];


    // 他のモデルとのリレーションシップを定義する
    // public function reserves()
    // {
    //     // Roomtype モデルと Reserve モデルのリレーションシップを定義する
    //     return $this->hasMany(Reserve::class, 'roomtype_id', 'id');
    // }
}
