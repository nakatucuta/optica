<?php

use Illuminate\Database\Seeder;
use App\Models\natural_person\Natural_person;
class Natural_personTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Natural_person::class, 80)->create();
    }
}
