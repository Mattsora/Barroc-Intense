<?php

use App\failed_job;
use Illuminate\Database\Seeder;

class FailedJobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        failed_job::insert([
            'connection' => 'dit is een connectie in failed_jobs',
            'queue' => 'dit is een queue in failed_jobs',
            'payload' => 'dit is een payload in failed_jobs',
            'exception' => 'dit is een excepted in failed_jobs'
        ]);

    }
}
