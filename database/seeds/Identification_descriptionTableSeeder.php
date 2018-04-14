<?php

use Illuminate\Database\Seeder;
use App\Models\identification_description\Identification_description;
class Identification_descriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Identification_description::class, 4)->create();
    }
}
