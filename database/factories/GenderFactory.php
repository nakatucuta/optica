<?php

use Faker\Generator as Faker;

$factory->define(App\Models\gender\Gender::class, function (Faker $faker) {
    return [
         'name_gender' => $faker->randomElement(['Masculino','Femenino','Trasngenero','Otro']),
    ];
});
