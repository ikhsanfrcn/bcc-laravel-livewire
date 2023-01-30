<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_type = 
        [
            ['product_type'=>'Coffee'],
            ['product_type'=>'Bakery'],
            ['product_type'=>'Eatery']
        ];
        DB::table('product_type')->insert($product_type);
    }
}
