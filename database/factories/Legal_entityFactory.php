<?php

use Faker\Generator as Faker;

$factory->define(App\Models\legal_entity\Legal_entity::class, function (Faker $faker) {
    return [
    'business_name' => $faker->randomElement(['Nueva EPS','Colsanita','Seguro social','subcidiada','Particular']),
    'nit' => rand(1,1000000000),
    'adress'  => $faker->randomElement(['calle 35 n 7a 12 ','calle jamas','calle 40 num 40-51','calle jamas']),
     'social_object' => $faker->text(18),
     'Postal_Code'   => rand(1,1000000000),
     'email'  => $faker->unique()->safeEmail,
     
     'phone_number'  => rand(1,1000000000),
     'entity_types_id' => App\Models\entity_type\Entity_type::find($faker->numberBetween($min= 1,$max=4)),

     
 ];
});
