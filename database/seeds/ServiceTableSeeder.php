<?php

use Illuminate\Database\Seeder;
use App\Models\service\Service;
class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Service::class, 3)->create();
    }
}
