<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PrijsopgavesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        \App\prijsopgave::insert([
           'customer_id' => $faker->numberBetween('1', '8')
        ]);
    }
}
