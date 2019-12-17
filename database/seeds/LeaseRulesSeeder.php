<?php

use App\lease_rules;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class LeaseRulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $lease_id = 1;
        $supply_id = 1;
        $faker = Faker::create();
        for ($i=0; $i <= 150; $i++) {
            DB::table('lease_rules')->insert([
                'lease_id' => $lease_id,
                'supply_id' => $supply_id
            ]);
            $lease_id++;
            $supply_id++;
        }
    }
}
