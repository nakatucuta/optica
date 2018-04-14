<?php

use Illuminate\Database\Seeder;
use App\Models\principal_diagnostic\Principal_diagnostic;
class Principal_diagnosticTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Principal_diagnostic::class, 5)->create();
    }
}
