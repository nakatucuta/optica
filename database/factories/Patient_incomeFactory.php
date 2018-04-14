<?php

use Faker\Generator as Faker;

$factory->define(App\Models\patient_income\Patient_income::class, function (Faker $faker) {
    return [
         'description_income'  => $faker->text(190),
         'companion' => $faker->name,
         'companion_phone_number' => rand(1,1000000000),
         'kinship' => $faker->name,
         'responsible'=> $faker->name,
         'phone_responsible' => rand(1,1000000000),
         'relationship_resposible' => $faker->text(50),
         'appointment_calendar_id' => App\Models\appointment_calendar\Appointment_calendar::find($faker->numberBetween($min= 1,$max=80)),
         'service_id' => App\Models\service\Service::find($faker->numberBetween($min= 1,$max=3)),
         'service_order_id' => App\Models\service\Service::find($faker->numberBetween($min= 1,$max=3)),

 
    ];
});
