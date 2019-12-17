<?php

use App\purchase;
use Faker\Factory as Faker;
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

        $customer = 1;
        $faker = Faker::create();
        for ($i=0; $i <= 150; $i++) {
            DB::table('purchases')->insert([
                'user_id' => $faker->numberBetween('1', '8')
            ]);

            $customer++;
        }
    }
}
