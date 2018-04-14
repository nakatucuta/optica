<?php

use Faker\Generator as Faker;

$factory->define(App\Models\principal_diagnostic\Principal_diagnostic::class, function (Faker $faker) {
    return [
        'code' => rand(1,10000000),
    
    'name'  => $faker->randomElement(['PACIENTE SANO','PACIENTE MALO','PACICENTE MIOPATICO']),
    ];
});
