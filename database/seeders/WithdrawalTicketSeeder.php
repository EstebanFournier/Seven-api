<?php

namespace Database\Seeders;

use App\Models\WithdrawalTicket;
use Illuminate\Database\Seeder;

class WithdrawalTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WithdrawalTicket::factory(5)->create();
    }
}
