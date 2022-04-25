<?php

namespace Database\Seeders;

use App\Models\Drivers;
use Illuminate\Database\Seeder;

class DriversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Drivers::factory(10)->create();
    }
}
