<?php

use Illuminate\Database\Seeder;
use \App\Bkrcheckmdl;
use Faker\Factory as Faker;

class CompanyDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userid = 1;
        $faker = Faker::create();
            DB::table('companydetails')->insert([
                'user_id' => $faker->numberBetween('1', '8'),
                'companyname' => $faker->name,
                'email' => $faker->email,
                'telefoon' => $faker->phoneNumber,
                'healthcheck' => $faker->numberBetween(0, 1)

            ]);

    }
}
