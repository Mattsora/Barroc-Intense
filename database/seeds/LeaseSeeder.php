<?php

use App\Lease;
use Faker\Factory as Faker;
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

        $customer = 1;
        $faker = Faker::create();
        $lease_id = 1;
        $supply_id = 1;
        for ($i=0; $i <= 150; $i++) {
            DB::table('leases')->insert([
                'lease_type_id' => $faker->numberBetween('1', '2'),
                'finance_id' => $faker->numberBetween('1','8'),
                'customer_id'=> $faker->numberBetween('1','8')
            ]);
            $lease_id++;
            $supply_id++;
        }

            $customer++;
        }
}
