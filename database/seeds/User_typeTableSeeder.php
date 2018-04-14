<?php

use Illuminate\Database\Seeder;
use App\Models\user_type\User_type;
class User_typeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User_type::class, 3)->create();
    }
}
