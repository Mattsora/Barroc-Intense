<?php

use App\failed_job;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class FailedJobsSeeder extends Seeder
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
            DB::table('failed_jobs')->insert([
                'connection' => $faker->paragraph,
                'queue' => $faker->name,
                'payload' => $faker->paragraph,
                'exception' => $faker->paragraph
            ]);
            $userid++;
        }

    }
}
