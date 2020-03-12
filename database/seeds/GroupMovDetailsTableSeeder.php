<?php

use Illuminate\Database\Seeder;

class GroupMovDetailsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('group_mov_details')->delete();

        $mov_detail = [
        	[
        		'id'=>1, 
        		'group_mov_id'=>1, 
        		'category_id'=>1, 
        		'product_id'=>1, 
        		'quantity'=>1, 
        		'record_type'=>'Out',
        		'created_at'=> date("Y-m-d H:i:s"), 
        		'updated_at'=>date("Y-m-d H:i:s") 
        	],
        	[
        		'id'=>2, 
        		'group_mov_id'=>1, 
        		'category_id'=>1, 
        		'product_id'=>2, 
        		'quantity'=>1, 
        		'record_type'=>'Out',
        		'created_at'=> date("Y-m-d H:i:s"), 
        		'updated_at'=>date("Y-m-d H:i:s") 
        	],

        	[
        		'id'=>3, 
        		'group_mov_id'=>1, 
        		'category_id'=>1, 
        		'product_id'=>3, 
        		'quantity'=>1, 
        		'record_type'=>'Out',
        		'created_at'=> date("Y-m-d H:i:s"), 
        		'updated_at'=>date("Y-m-d H:i:s") 
        	],

        	[
        		'id'=>4, 
        		'group_mov_id'=>1, 
        		'category_id'=>1, 
        		'product_id'=>4, 
        		'quantity'=>1, 
        		'record_type'=>'Out',
        		'created_at'=> date("Y-m-d H:i:s"), 
        		'updated_at'=>date("Y-m-d H:i:s") 
        	],

        	[
        		'id'=>5, 
        		'group_mov_id'=>1, 
        		'category_id'=>2, 
        		'product_id'=>1, 
        		'quantity'=>1, 
        		'record_type'=>'Out',
        		'created_at'=> date("Y-m-d H:i:s"), 
        		'updated_at'=>date("Y-m-d H:i:s") 
        	],

        	[
        		'id'=>6, 
        		'group_mov_id'=>1, 
        		'category_id'=>3, 
        		'product_id'=>2, 
        		'quantity'=>1, 
        		'record_type'=>'Out',
        		'created_at'=> date("Y-m-d H:i:s"), 
        		'updated_at'=>date("Y-m-d H:i:s") 
        	],

        	[
        		'id'=>7, 
        		'group_mov_id'=>1, 
        		'category_id'=>1, 
        		'product_id'=>2, 
        		'quantity'=>1, 
        		'record_type'=>'Return',
        		'created_at'=> date("Y-m-d H:i:s"), 
        		'updated_at'=>date("Y-m-d H:i:s") 
        	],

        	[
        		'id'=>8, 
        		'group_mov_id'=>1, 
        		'category_id'=>1, 
        		'product_id'=>1, 
        		'quantity'=>1, 
        		'record_type'=>'Return',
        		'created_at'=> date("Y-m-d H:i:s"), 
        		'updated_at'=>date("Y-m-d H:i:s") 
        	],

        	[
        		'id'=>9, 
        		'group_mov_id'=>1, 
        		'category_id'=>1, 
        		'product_id'=>3, 
        		'quantity'=>1, 
        		'record_type'=>'Return',
        		'created_at'=> date("Y-m-d H:i:s"), 
        		'updated_at'=>date("Y-m-d H:i:s") 
        	]
        ];

       DB::table('group_mov_details')->insert($mov_detail);
    }
}
