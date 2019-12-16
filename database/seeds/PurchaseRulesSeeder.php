<?php

use App\purchase_rules;
use Illuminate\Database\Seeder;

class PurchaseRulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        purchase_rules::insert([
           'purchase_id' => 1,
           'supply_id' => 1
        ]);
    }
}
