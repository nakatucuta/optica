<?php

use Faker\Generator as Faker;

$factory->define(App\Models\refractive\Refractive::class, function (Faker $faker) {
    return [

     'near' => $faker->randomElement(['0,5',',1,80','NA']),
    'nea_r'  => $faker->randomElement(['2,6','0,2','3,0']),
    'ne_ar' => $faker->randomElement(['NA','NE','0,1']),
    ];
});
