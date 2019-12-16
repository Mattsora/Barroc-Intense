<?php

use App\supplies;
use Illuminate\Database\Seeder;

class SuppliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        supplies::insert([
           'name' => 'koffie automaat 1',
            'description' => 'ons eerste koffieautomaat',
            'thumbnail' => 'dit is een thumbnail',
            'in_stock' => 1,
            'lease_cost' => 100,
            'startup_cost' => 50,
            'roll_id' => 1
        ]);
    }
}
