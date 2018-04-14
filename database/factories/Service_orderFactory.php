<?php

use Faker\Generator as Faker;

$factory->define(App\Models\service_order\Service_order::class, function (Faker $faker) {
    return [
        


    'code' => rand(1,1000000000),
    'date_order'  =>  date($format = 'y-m-d'),
    'description' => $faker->randomElement(['remision medicina general','consulta privada','remision particular']),
    'value_to_pay' => rand(1,1000000000),
    'affiliation_id' => App\Models\affiliation\Affiliation::find($faker->numberBetween($min= 1,$max=80)),

    ];
});
