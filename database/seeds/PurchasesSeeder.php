<?php

use App\purchase;
use Illuminate\Database\Seeder;

class PurchasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        purchase::insert([
           'user_id' => 1
        ]);
    }
}
