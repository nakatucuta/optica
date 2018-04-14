<?php

use Faker\Generator as Faker;

$factory->define(App\Models\type_service\Type_service::class, function (Faker $faker) {
    return [
        'type_service'  => $faker->randomElement(['examen','consulta','atencion']),
    ];
});
