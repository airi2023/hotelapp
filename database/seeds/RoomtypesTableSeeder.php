<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //必ず追記！書かないとエラーになる（実行はできるけど）

class RoomtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //投稿1つ目
        $param = [
            // 'roomtype_id' => 1,
            'roomtype_name' => '洋室', //書かないと「項目が未定義です」のエラーで実行できないので書く
            'number_of_guests' => 4,
        ];
        DB::table('roomtypes')->insert($param);

        //投稿2つ目
        $param = [
            // 'roomtype_id' => 1,
            'roomtype_name' => '和室', //書かないと「項目が未定義です」のエラーで実行できないので書く
            'number_of_guests' => 6,
        ];
        DB::table('roomtypes')->insert($param);

        //投稿3つ目
        $param = [
            // 'roomtype_id' => 1,
            'roomtype_name' => 'VIP', //書かないと「項目が未定義です」のエラーで実行できないので書く
            'number_of_guests' => 2,
        ];
        DB::table('roomtypes')->insert($param);
    }
}
