<?php
use Faker\Generator as Faker;

$factory->define(App\Formulario::class, function (Faker $faker) {

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->email,
        'message' => $faker->text($maxNbChars = 50),
        ];

});
?>
