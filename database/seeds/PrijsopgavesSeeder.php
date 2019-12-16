<?php

use Illuminate\Database\Seeder;

class PrijsopgavesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\prijsopgave::insert([
           'customer_id' => 1,
            'supply_id' => 1,
            'supply_id1' => 1,
            'supply_id2' => 1,
            'count' => 1,
            'count1' => 1,
            'count2' => 1
        ]);
    }
}
