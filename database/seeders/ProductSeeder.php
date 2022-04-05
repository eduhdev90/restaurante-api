<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => "Coca-Cola",
            'price' => 5.25,
            'sku' => Str::random(10)
        ]);

        DB::table('products')->insert([
            'name' => "Red-bull",
            'price' => 12.5,
            'sku' => Str::random(10)
        ]);

        DB::table('products')->insert([
            'name' => "Picanha",
            'price' => 105.78,
            'sku' => Str::random(10)
        ]);
    }
}
