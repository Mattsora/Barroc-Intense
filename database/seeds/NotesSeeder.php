<?php

use App\notes;
use Illuminate\Database\Seeder;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        notes::insert([
           'sales_id' => 1,
           'customer_id' => 1,
           'content' => 'dit is een notes seeder'
        ]);
    }
}
