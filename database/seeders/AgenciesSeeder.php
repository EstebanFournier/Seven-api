<?php

namespace Database\Seeders;

use App\Models\Agencies;
use Illuminate\Database\Seeder;

class AgenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agencies::factory(5)->create();
    }
}
