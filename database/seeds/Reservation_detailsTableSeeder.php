<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //必ず追記！書かないとエラーになる（実行はできるけど）

class Reservation_detailsTableSeeder extends Seeder
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
            // 'reservation_detail_id' => 1,
            'reserve_id' => 1, //書かないと「項目が未定義です」のエラーで実行できないので書く
            'room_id' => 1,
            'stay_days' => 2,
            'fee' => 5000,
        ];
        DB::table('reservation_details')->insert($param);
    }
}
