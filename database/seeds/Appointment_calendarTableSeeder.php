<?php

use Illuminate\Database\Seeder;
use App\Models\appointment_calendar\Appointment_calendar;

class Appointment_calendarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Appointment_calendar::class, 5)->create();
    }
}
