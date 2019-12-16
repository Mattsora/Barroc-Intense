<?php

use App\lease_contract;
use Illuminate\Database\Seeder;

class LeaseContractsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        lease_contract::insert([
           'customer_id' => 1,
            'lease_type' => 1,
            'supply_id'  => 1
        ]);
    }
}
