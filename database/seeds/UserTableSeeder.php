<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
       DB::table('users')->delete();

        $user = [
        	[
        		'id'=>1, 
        		'name'=>'Admin',
        		'email'=>'admin@gmail.com',
        		'email_verified_at'=>'',
        		'password'=> '$2y$10$jzZ/8zis0KHPvqJorMuAJu/thUi5IpfWODiAp2jDtxobZDFr4zo/q',
        		'remember_token'=>'',
        		'created_at'=> date("Y-m-d H:i:s"), 
        		'updated_at'=>date("Y-m-d H:i:s") 
        	],
        	[
        		'id'=>2, 
        		'name'=>'Sima',
        		'email'=>'sima@gmail.com',
        		'email_verified_at'=>'',
        		'password'=> '$2y$10$jzZ/8zis0KHPvqJorMuAJu/thUi5IpfWODiAp2jDtxobZDFr4zo/q',
        		'remember_token'=>'',
        		'created_at'=> date("Y-m-d H:i:s"), 
        		'updated_at'=>date("Y-m-d H:i:s") 
        	],
        	[
        		'id'=>3, 
        		'name'=>'Tahera',
        		'email'=>'tahera@gmail.com',
        		'email_verified_at'=>'',
        		'password'=> '$2y$10$jzZ/8zis0KHPvqJorMuAJu/thUi5IpfWODiAp2jDtxobZDFr4zo/q',
        		'remember_token'=>'',
        		'created_at'=> date("Y-m-d H:i:s"), 
        		'updated_at'=>date("Y-m-d H:i:s") 
        	]
        ];

       DB::table('users')->insert($user);
    }
}
