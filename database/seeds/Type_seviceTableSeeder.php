<?php

use Illuminate\Database\Seeder;
use App\Models\type_service\Type_service;
class Type_seviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Type_service::class, 3)->create();
    }
}
