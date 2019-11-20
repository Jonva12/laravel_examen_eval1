<?php

use Illuminate\Database\Seeder;

class productosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        for($i = 0; $i<3; $i++){
        	DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(30),
            'stock' => random_int(1, 100),
            'price' => 12.23
        ]);
        }
    }
}
