<?php

use App\workorder;
use Illuminate\Database\Seeder;

class WorkOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        workorder::insert([
            'user_id' => 1,
            'lease_id' => 1,
            'description' => 'dit is een workorder description seeder'
        ]);
    }
}
