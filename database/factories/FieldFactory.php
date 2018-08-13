<?php

use Faker\Generator as Faker;

$factory->define(App\Field::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'culture' => $faker->word,
        'area' => $faker->numberBetween(10, 50),
    ];
});
