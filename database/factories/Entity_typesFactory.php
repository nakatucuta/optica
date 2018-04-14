<?php

use Faker\Generator as Faker;

$factory->define(App\Models\entity_type\Entity_type::class, function (Faker $faker) {
    return [
    	'code' => rand(1,1000000000),
        'name_type' => $faker->randomElement(['EPS','IPS','SUBCIDIADA','Otro']),
    ];
});
