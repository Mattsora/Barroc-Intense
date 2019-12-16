<?php

use App\LeaseType;
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
