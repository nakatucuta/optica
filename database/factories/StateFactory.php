<?php

use Faker\Generator as Faker;

$factory->define(App\Models\state\State::class, function (Faker $faker) {
    return [
        'name'  => $faker->randomElement(['Activo','Cumplido','cancelada']),
    ];
});
