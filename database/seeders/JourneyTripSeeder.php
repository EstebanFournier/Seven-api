<?php

namespace Database\Seeders;

use App\Models\JourneyTrip;
use Illuminate\Database\Seeder;

class JourneyTripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JourneyTrip::factory(15)->create();
    }
}
