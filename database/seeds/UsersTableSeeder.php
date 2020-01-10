<?php

use Illuminate\Database\Seeder;
use \App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
           'role_id'    => 1,
            'name'      => 'admin',
            'email'     => 'admin@barroc.nl',
            'password'  => Hash::make('barrocintens'),
            'cookies' => 0

        ]);

        User::insert([
            'role_id'    => 2,
            'name'      => 'Sales',
            'email'     => 'sales@barroc.nl',
            'password'  => Hash::make('barrocintens'),
            'cookies' => 0

        ]);

        User::insert([
            'role_id'    => 3,
            'name'      => 'finance',
            'email'     => 'finance@barroc.nl',
            'password'  => Hash::make('barrocintens'),
            'cookies' => 0

        ]);

        User::insert([
            'role_id'    => 4,
            'name'      => 'maintenance',
            'email'     => 'maintenance@barroc.nl',
            'password'  => Hash::make('barrocintens'),
            'cookies' => 0

        ]);

        User::insert([
            'role_id'    => 5,
            'name'      => 'head-maintenance',
            'email'     => 'head-maintenance@barroc.nl',
            'password'  => Hash::make('barrocintens'),
            'cookies' => 0

        ]);

        User::insert([
            'role_id'    => 6,
            'name'      => 'supplier',
            'email'     => 'supplier@barroc.nl',
            'password'  => Hash::make('barrocintens'),
            'cookies' => 0

        ]);

        User::insert([
            'role_id'    => 7,
            'name'      => 'ceo',
            'email'     => 'ceo@barroc.nl',
            'password'  => Hash::make('barrocintens'),
            'cookies' => 0

        ]);

        User::insert([
            'role_id'    => 8,
            'name'      => 'customer',
            'email'     => 'customer@barroc.nl',
            'password'  => Hash::make('barrocintens'),
            'cookies' => 0

        ]);
    }
}
