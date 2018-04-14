<?php

use Faker\Generator as Faker;

$factory->define(App\Models\service\Service::class, function (Faker $faker) {
    return [
        
         'name_service'  => $faker->randomElement(['optamologia','optometria','lavado']),
         'value_service' => rand(1,1000000000),
         'type_service_id' => App\Models\type_service\Type_service::find($faker->numberBetween($min= 1,$max=3)),
    ];
});
