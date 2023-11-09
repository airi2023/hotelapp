<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            // 'reserve_id' => 1,
            'guest_id' => 1,//書かないと「項目が未定義です」のエラーで実行できないので書く
            'number_of_people' => 2,
            'checkin' => '2023-11-09',
            'checkout' => '2023-11-10',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            // 'reserve_id' => 2,
            'guest_id' => 2,//書かないと「項目が未定義です」のエラーで実行できないので書く
            'number_of_people' => 4,
            'checkin' => '2023-11-09',
            'checkout' => '2023-11-11',
        ];
        DB::table('reserves')->insert($param);
    }
}
