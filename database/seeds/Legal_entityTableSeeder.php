<?php

use Illuminate\Database\Seeder;
use App\Models\legal_entity\Legal_entity;
class Legal_entityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Legal_entity::class, 5)->create();
    }
}
