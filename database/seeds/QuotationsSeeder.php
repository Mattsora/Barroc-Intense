<?php

use App\quotations;
use Illuminate\Database\Seeder;

class QuotationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        quotations::insert([
           'sales_id' => 1,
            'customer_id' => 1,
            'content' => 'dit is een quotation content seeder'
        ]);
    }
}
