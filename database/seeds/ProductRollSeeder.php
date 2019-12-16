<?php

use App\Product_roll;
use Illuminate\Database\Seeder;

class ProductRollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product_roll::insert([
           'roll' => 1
        ]);
        Product_roll::insert([
            'roll' => 0
        ]);
    }
}
