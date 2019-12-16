<?php

use App\Invoice;
use Faker\Factory as Faker;
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
        $lease_ID = 1;
        $faker = Faker::create();
        for ($i=0; $i <= 150; $i++) {
            DB::table('invoices')->insert([
                'lease_id' => $lease_ID
            ]);
            $lease_ID++;
        }

    }
}
