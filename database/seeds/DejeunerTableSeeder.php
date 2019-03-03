<?php

use Illuminate\Database\Seeder;

class DejeunerTableSeeder extends Seeder
{
   
    public function run()
    {
        factory(App\Dejeuner::class, 50)->create();
    }
}
