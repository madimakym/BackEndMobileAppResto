<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        // $this->call(SaladesTableSeeder::class);
        $this->call(DejeunerTableSeeder::class);
        // $this->call(PizzaTableSeeder::class);
    }
}
