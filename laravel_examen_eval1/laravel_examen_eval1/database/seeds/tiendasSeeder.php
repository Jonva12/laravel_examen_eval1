<?php

use Illuminate\Database\Seeder;

class tiendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<10; $i++){
        	DB::table('shops')->insert([
            'name' => Str::random(10),
            'description' => Str::random(30),
            'password' =>Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'likes' => random_int(1, 10)
        ]);
        }
    }
}
