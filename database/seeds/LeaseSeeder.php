<?php

use App\Lease;
use Illuminate\Database\Seeder;

class LeaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Lease::insert([
           'lease_type_id' => 1,
            'customer_id' => 1,
            'finance_id' => 1
        ]);
    }
}
