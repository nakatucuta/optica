<?php

use Illuminate\Database\Seeder;
use App\Models\state\State;
class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(State::class, 3)->create();
    }
}
