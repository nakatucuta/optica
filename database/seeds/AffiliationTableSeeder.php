<?php

use Illuminate\Database\Seeder;
use App\Models\affiliation\Affiliation;
class AffiliationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Affiliation::class, 80)->create();
    }
}
