<?php

use App\lease_rules;
use Illuminate\Database\Seeder;

class LeaseRulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        lease_rules::insert([
           'lease_id' => 1,
            'supply_id' => 1

        ]);
    }
}
