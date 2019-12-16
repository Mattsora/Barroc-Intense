<?php

use App\workorder;
use Faker\Factory as Faker;
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

        $lease_id = 1;
        $supply_id = 1;
        $faker = Faker::create();
        for ($i=0; $i <= 150; $i++) {
            DB::table('work_orders')->insert([
                'user_id' => $faker->numberBetween('1', '8'),
                'lease_id' => $faker->numberBetween('1', '150'),
                'description' =>$faker->paragraph
            ]);
            $lease_id++;
            $supply_id++;
        }
    }
}
