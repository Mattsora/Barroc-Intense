<?php

use Illuminate\Database\Seeder;
use \App\Bkrcheckmdl;

class CompanyDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Bkrcheckmdl::insert([
           'user_id' => 1,
            'companyname' => 'Project Group 8',
            'email' => 'pg8@admin.nl',
            'telefoon' => 0666666666,
            'healthcheck' => 1
        ]);
    }
}
