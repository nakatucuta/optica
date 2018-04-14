<?php

use Faker\Generator as Faker;

$factory->define(App\Models\identification_description\Identification_description::class, function (Faker $faker) {
    return [
       'name_identification' => $faker->randomElement(['CC','TI','CE','Otro']),
    ];
});
