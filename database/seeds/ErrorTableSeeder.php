<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use \App\error;

class ErrorTableSeeder extends Seeder
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
        for ($i=0; $i <= 150; $i++) {
            DB::table('errors')->insert([
                'errorMessage' => $faker->paragraph,
                'CompanyName' => $faker->name
            ]);
            $userid++;
        }
    }
}
