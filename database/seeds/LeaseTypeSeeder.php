<?php

use App\LeaseType;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class LeaseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        LeaseType::insert([
            'name' => 'maandelijks'
        ]);
        LeaseType::insert([
            'name' => 'jaarlijks'
        ]);


    }
}
