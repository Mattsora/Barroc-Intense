<?php

use Illuminate\Database\Seeder;
use \App\Roles;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::insert([
            'name'    => 'Admin'
        ]);
        Roles::insert([
            'name'    => 'Sales'
        ]);
        Roles::insert([
            'name'    => 'Finance'
        ]);
        Roles::insert([
            'name'    => 'Maintenance'
        ]);
        Roles::insert([
            'name'    => 'Head-Maintenance'
        ]);
        Roles::insert([
            'name'    => 'Supplier'
        ]);
        Roles::insert([
            'name'    => 'Ceo'
        ]);
        Roles::insert([
            'name'    => 'Customer'
        ]);
    }
}
