<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert([
            [
                "name" => "Fried Rice",
                "category" => "Meals",
                "description" => "A simple meals so delicious",
                "ingredient" => "Rice, Onion, Egg",
                "instruction" => "Fried the rice",
                "calories" => 120.00,
                "carbs" => 30.00,
                "fat" => 56.53,
                "protein" => 66.54,
                "serving_size" => 2,
                "like" => false,
                "like_count" => 0,
                "saved" => false,
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
