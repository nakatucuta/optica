<?php

use Illuminate\Database\Seeder;
use App\Models\gender\Gender;
class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(gender::class, 4)->create();
    }
}
