<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //必ず追記！書かないとエラーになる（実行はできるけど）

class RoomsTableSeeder extends Seeder
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
            // 'room_id' => 1,
            'roomtype_id' => 1, //書かないと「項目が未定義です」のエラーで実行できないので書く
            'room_name' => '101号室',
        ];
        DB::table('rooms')->insert($param);

        //投稿2つ目
        $param = [
            // 'room_id' => 1,
            'roomtype_id' => 1,
            'room_name' => '102号室',
        ];
        DB::table('rooms')->insert($param);

        //投稿3つ目
        $param = [
            // 'room_id' => 1,
            'roomtype_id' => 1,
            'room_name' => '103号室',
        ];
        DB::table('rooms')->insert($param);

        //投稿4つ目
        $param = [
            // 'room_id' => 1,
            'roomtype_id' => 2,
            'room_name' => '松の間',
        ];
        DB::table('rooms')->insert($param);

        //投稿5つ目
        $param = [
            // 'room_id' => 1,
            'roomtype_id' => 2,
            'room_name' => '竹の間',
        ];
        DB::table('rooms')->insert($param);

        //投稿6つ目
        $param = [
            // 'room_id' => 1,
            'roomtype_id' => 2,
            'room_name' => '梅の間',
        ];
        DB::table('rooms')->insert($param);

        //投稿7つ目
        $param = [
            // 'room_id' => 1,
            'roomtype_id' => 3,
            'room_name' => 'カカオ',
        ];
        DB::table('rooms')->insert($param);

        //投稿8つ目
        $param = [
            // 'room_id' => 1,
            'roomtype_id' => 3,
            'room_name' => 'バナナ',
        ];
        DB::table('rooms')->insert($param);

        //投稿9つ目
        $param = [
            // 'room_id' => 1,
            'roomtype_id' => 3,
            'room_name' => 'チョコ',
        ];
        DB::table('rooms')->insert($param);


    }
}
