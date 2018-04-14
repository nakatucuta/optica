<?php

use Faker\Generator as Faker;

$factory->define(App\Models\natural_person\Natural_person::class, function (Faker $faker) {
    return [
        'identification_description_id' => App\Models\identification_description\Identification_description::find($faker->numberBetween($min= 1,$max=3)),
    
    'identification' => rand(1,1000000000),
    
    'first_name'  => $faker->randomElement(['juan','kevin','andres']),
     'second_name' => $faker->randomElement(['david','daniel','jose']),
     'surname'    => $faker->randomElement(['suarez','cantero','mercado']),
     'second_surname'  => $faker->randomElement(['bermudez','bejarano','perez']),
     'date_of_birth'  =>  date($format = 'y-m-d'),
     'phone_number' => rand(1,1000000000),
     'occupation' => $faker->randomElement(['obrero','periquero','gerente']),
    
    'genders_id' => App\Models\gender\Gender::find($faker->numberBetween($min= 1,$max=3)),
     'email'  => $faker->unique()->safeEmail,
     'address' => $faker->text(9),
     /*'image' => $faker->image('public/images',400,300, null, false)*/
    ];
});
