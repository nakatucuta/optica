<?php

use Illuminate\Database\Seeder;
use App\Models\entity_type\Entity_type;
class Entity_typeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Entity_type::class, 4)->create();
    }
}
