<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 初期データ登録などに使用
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'カット1',
                'memo' => 'カット1詳細',
                'price' => 6000,
            ],
            [
                'name' => 'カラー',
                'memo' => 'カラー詳細',
                'price' => 1000,
            ],

            [
                'name' => 'パーマ',
                'memo' => 'パーマ詳細',
                'price' => 10000,
            ],
        ]);
    }
}