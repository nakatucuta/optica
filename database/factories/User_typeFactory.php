<?php

use Faker\Generator as Faker;

$factory->define(App\Models\user_type\User_type::class, function (Faker $faker) {
    return [
        
        'type_name'  => $faker->randomElement(['Administrador','Contador','Auxiliar']),
    ];
});
