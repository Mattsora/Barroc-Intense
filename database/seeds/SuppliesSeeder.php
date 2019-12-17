<?php

use App\supplies;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SuppliesSeeder extends Seeder
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
            DB::table('supplies')->insert([
                'name' => $faker->name,
                'description' => $faker->paragraph,
                'thumbnail' => $faker->paragraph,
                'in_stock' => $faker->numberBetween('0', '20'),
                'lease_cost' => $faker->numberBetween('0', '150'),
                'startup_cost' =>$faker->numberBetween('1', '2'),
                'roll_id' => $faker->numberBetween('1', '2')
            ]);
            $lease_id++;
            $supply_id++;
        }
    }
}
