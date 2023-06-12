<?php

namespace Database\Seeders;

use App\Models\RestituedCar;
use Illuminate\Database\Seeder;

class RestituedCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RestituedCar::factory(10)->create();
    }
}
