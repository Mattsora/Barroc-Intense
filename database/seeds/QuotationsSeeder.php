<?php

use App\quotations;
use Faker\Factory as Faker;
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
        $lease_id = 1;
        $supply_id = 1;
        $faker = Faker::create();
        for ($i=0; $i <= 150; $i++) {
            DB::table('quotations')->insert([
                'sales_id' => $faker->numberBetween('1', '8'),
                'customer_id' => $faker->numberBetween('1', '8'),
                'content' => $faker->paragraph
            ]);
            $lease_id++;
            $supply_id++;
        }
    }
}
