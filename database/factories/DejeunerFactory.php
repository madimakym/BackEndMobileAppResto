<?php

use Faker\Generator as Faker;

$factory->define(App\Dejeuner::class, function (Faker $faker) {
    return [
        'libelle' => $faker->text(20),
        'description' => $faker->text(50),
        'prix' => $faker->unique()->numberBetween($min = 5000, $max = 9000),
    ];
});
