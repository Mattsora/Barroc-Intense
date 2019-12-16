<?php

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
        //
        Error::insert([
            'errorMessage' => 'Hee man ik heb een error',
            'CompanyName'  => 'Dit is mijn company name'
    ]);
        Error::insert([
        'errorMessage' => 'HET GAAT HELEMAAL FOUT',
        'CompanyName'  => 'OH MIJN GOD MIJN BEDRIJF GAAT KAPOT'
    ]);
    }
}
