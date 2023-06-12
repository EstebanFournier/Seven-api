<?php

namespace Database\Seeders;

use App\Models\PlaceStart;
use Illuminate\Database\Seeder;

class placeStartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlaceStart::factory(10)->create();
    }
}
