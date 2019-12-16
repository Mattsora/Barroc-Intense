<?php

use App\Invoice;
use Illuminate\Database\Seeder;

class InvoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Invoice::insert([
           'lease_id' => 1,
        ]);
    }
}
