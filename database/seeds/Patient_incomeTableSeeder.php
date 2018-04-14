<?php

use Illuminate\Database\Seeder;
use App\Models\patient_income\Patient_income;
class Patient_incomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Patient_income::class, 80)->create();
    }
}
