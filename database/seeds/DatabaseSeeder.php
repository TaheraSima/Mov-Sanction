<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
	    $this->call([
			CustomUserTableSeeder::class,
			CategoryTableSeeder::class,
			ProductTableSeeder::class,
			GroupMovTableSeeder::class,
			GroupMovDetailsTableSeeder::class,
			OriginatorTableSeeder::class,
			UserTableSeeder::class

	    ]);
	    Model::reguard();
    }
}
