<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    public function run()
    {
       DB::table('categories')->delete();

        $category = [
        	['id'=>1, 'category_name'=>'Manpower State', 'created_at'=> date("Y-m-d H:i:s"), 'updated_at'=>date("Y-m-d H:i:s") ],
        	['id'=>2, 'category_name'=>'Veh State', 'created_at'=> date("Y-m-d H:i:s"), 'updated_at'=>date("Y-m-d H:i:s") ],
        	['id'=>3, 'category_name'=>'Tk/ Gun /Wpn State', 'created_at'=> date("Y-m-d H:i:s"), 'updated_at'=>date("Y-m-d H:i:s") ],
        	['id'=>4, 'category_name'=>'Ammo State', 'created_at'=> date("Y-m-d H:i:s"), 'updated_at'=>date("Y-m-d H:i:s") ],
        ];

       DB::table('categories')->insert($category);
    }
}
