<?php

use Faker\Generator as Faker;

$factory->define(App\Models\affiliation\Affiliation::class, function (Faker $faker) {
    return [
        
    	'natural_person_id' => App\Models\natural_person\Natural_person::find($faker->numberBetween($min= 1,$max=80)),

    	'legal_entity_id' => App\Models\legal_entity\Legal_entity::find($faker->numberBetween($min= 1,$max=5)),

    ];
});
