<?php

use Illuminate\Database\Seeder;

class OriginatorTableSeeder extends Seeder
{
    public function run()
    {
       DB::table('originators')->delete();

        $originate = [
        	[
        		'id'=>1, 
        		'reference_no'=>5, 
        		'ba_no'=>9, 
        		'email'=>'100@gmail.com', 
        		'approval_type'=>'AHQ', 
        		'address'=>'Uttara', 
        		'telephone'=>'88989', 
        		'extension'=>'87878', 
        		'name'=>'Tahera Khatun', 
        		'signature'=>'images/917643019.jpg', 
        		'rank'=>'M Officer', 
        		'on_behalf'=>'MO Officer', 
        		'display_name'=>'Tahera', 
        		'user_type'=>'MO', 
        		'status'=>1, 
        		'created_at'=> date("Y-m-d H:i:s"), 
        		'updated_at'=>date("Y-m-d H:i:s") 
        	],
        ];

       DB::table('originators')->insert($originate);
    }
}
