<?php

use App\lease_contract;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class LeaseContractsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer_id = 1;
        $supply_id = 1;
        $faker = Faker::create();
        for ($i=0; $i <= 150; $i++) {
            DB::table('lease_contracts')->insert([
                'customer_id' => $faker->numberBetween('1', '8'),
                'lease_type' => $faker->numberBetween('1','2'),
                'supply_id' => $supply_id
            ]);
            $customer_id++;
            $supply_id++;
        }
    }
}
