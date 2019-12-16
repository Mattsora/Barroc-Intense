<?php

use Illuminate\Database\Seeder;

class MaintanceUsedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\maintanceUsed::insert([
           'customer_id' => 1,
            'suplly_id' => 1,
             'date' => '2019-12-16'
        ]);
    }
}
