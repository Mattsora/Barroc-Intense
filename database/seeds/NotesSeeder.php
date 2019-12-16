<?php

use App\notes;
use Faker\Factory as Faker;
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

        $customer = 1;
        $faker = Faker::create();
        for ($i=0; $i <= 150; $i++) {
            DB::table('notes')->insert([
                'sales_id' => $faker->numberBetween('1', '8'),
                'customer_id' => $faker->numberBetween('1', '8'),
                'content' => $faker->paragraph
            ]);

            $customer++;
        }
    }
}
