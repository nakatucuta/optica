<?php

use Faker\Generator as Faker;

$factory->define(App\Models\appointment_calendar\Appointment_calendar::class, function (Faker $faker) {
    return [
        
        'date' => date($format = 'y-m-d'),
         'time' =>  date('H:i:s', rand(1,54000)),
         'state_id' => App\Models\state\State::find($faker->numberBetween($min= 1,$max=3)),
         'affiliation_id' => App\Models\affiliation\Affiliation::find($faker->numberBetween($min= 1,$max=80)),
         'user_id' => App\User::find($faker->numberBetween($min= 1,$max=50)),


    ];
});
