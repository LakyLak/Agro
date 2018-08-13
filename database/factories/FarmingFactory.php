<?php

use Faker\Generator as Faker;

$factory->define(App\Farming::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'farming_area' => $faker->numberBetween(1, 10),
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
