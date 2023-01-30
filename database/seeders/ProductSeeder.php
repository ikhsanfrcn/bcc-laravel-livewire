<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'product_code'=>'BCC001','product_name' => 'Affogato', 'product_type_id' => 1, 'product_price' => '35000','product_image'=>'https://balicoffeeclub.com/wp-content/uploads/2022/12/DSC00844.webp','product_description'=>'Warm goodness drizzled with caramel sauce and sprinkled with roasted cashew'
            ],
            [
                'product_code'=>'BCC002','product_name' => 'Raisin Danish', 'product_type_id' => 2, 'product_price' => '20000','product_image'=>'https://balicoffeeclub.com/wp-content/uploads/2022/06/pastry_1-83.jpg','product_description'=>'Warm goodness drizzled with caramel sauce and sprinkled with roasted cashew'
            ],
            [
                'product_code'=>'BCC003','product_name' => 'Banana Choco Mouse', 'product_type_id' => 3, 'product_price' => '10000','product_image'=>'https://balicoffeeclub.com/wp-content/uploads/2022/06/pastry_1-69.jpg','product_description'=>'Warm goodness drizzled with caramel sauce and sprinkled with roasted cashew'
            ]
        ];
        DB::table('products')->insert($products);
    }
}
