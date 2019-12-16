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
            'created at' => '16-12-2019',
            'updated at' => '16-12-2019'
        ]);
    }
}
