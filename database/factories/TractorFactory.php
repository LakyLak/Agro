<?php

use Faker\Generator as Faker;

$factory->define(App\Tractor::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
