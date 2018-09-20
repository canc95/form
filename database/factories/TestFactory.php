<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Test::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'email' => $faker->unique()->email,
    ];
});
