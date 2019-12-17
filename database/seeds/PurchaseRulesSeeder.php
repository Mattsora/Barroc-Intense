<?php

use App\purchase_rules;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PurchaseRulesSeeder extends Seeder
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
        for ($i=0; $i <= 1500; $i++) {
            DB::table('purchase_rules')->insert([
                'purchase_id' => $faker->numberBetween('1', '150'),
                'supply_id' => $faker->numberBetween('1', '150')
            ]);
            $lease_id++;
            $supply_id++;
        }
    }
}
