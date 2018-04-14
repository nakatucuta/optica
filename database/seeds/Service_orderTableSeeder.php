<?php

use Illuminate\Database\Seeder;
use App\Models\service_order\Service_order;
class Service_orderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Service_order::class, 80)->create();
    }
}
