<?php

use Illuminate\Database\Seeder;

class CustomUserTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('custom_users')->delete();

        $user = [
        	['id'=>1, 'user_id'=>1137, 'password'=>'1137', 'user_type'=>1, 'user_status'=>1, 'created_at'=> date("Y-m-d H:i:s"), 'updated_at'=>date("Y-m-d H:i:s") ],
        ];
        DB::table('custom_users')->insert($user);
    }
}
