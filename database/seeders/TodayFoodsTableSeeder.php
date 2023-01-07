<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TodayFoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('today_foods')->insert([
            [
                "date" =>  Carbon::create('2023', '01', '05'),
                "name" => "Fried Rice",
                "calory" => 210.00,
                "user_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "date" =>  Carbon::create('2023', '01', '06'),
                "name" => "Gado-gado",
                "calory" => 255.50,
                "user_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
