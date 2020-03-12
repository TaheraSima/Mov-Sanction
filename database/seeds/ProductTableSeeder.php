<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
       DB::table('products')->delete();

        $product = [
        	['id'=>1, 'category_id'=>1, 'product_name'=>'Jeep', 'created_at'=> date("Y-m-d H:i:s"), 'updated_at'=>date("Y-m-d H:i:s") ],
        	['id'=>2, 'category_id'=>2, 'product_name'=>'Pick Up', 'created_at'=> date("Y-m-d H:i:s"), 'updated_at'=>date("Y-m-d H:i:s") ],
        	['id'=>3, 'category_id'=>3, 'product_name'=>'Tk', 'created_at'=> date("Y-m-d H:i:s"), 'updated_at'=>date("Y-m-d H:i:s") ],
        	['id'=>4, 'category_id'=>4, 'product_name'=>'Riffle', 'created_at'=> date("Y-m-d H:i:s"), 'updated_at'=>date("Y-m-d H:i:s") ],
        ];

       DB::table('products')->insert($product);
    }
}
