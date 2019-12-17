<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class MaintanceUsedSeeder extends Seeder
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
            DB::table('maintanceused')->insert([
                'customer_id' => $faker->numberBetween('1', '8'),
                'suplly_id' => $faker->numberBetween('1', '150'),
                'date' => '2019-12-16'
            ]);

            $customer++;
        }
    }
}
