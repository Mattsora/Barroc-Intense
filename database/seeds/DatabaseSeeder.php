<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('RoleTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('ErrorTableSeeder');
        $this->call('CompanyDetailsTableSeeder');
        $this->call('FailedJobsSeeder');
        $this->call('LeaseTypeSeeder');
        $this->call('LeaseSeeder');
        $this->call('ProductRollSeeder');
        $this->call('SuppliesSeeder');
        $this->call('LeaseContractsSeeder');
        $this->call('LeaseRulesSeeder');
        $this->call('InvoicesSeeder');
        $this->call('MaintanceUsedSeeder');
        $this->call('NotesSeeder');
        $this->call('PrijsopgavesSeeder');
        $this->call('PurchasesSeeder');
        $this->call('PurchaseRulesSeeder');
        $this->call('QuotationsSeeder');
        $this->call('WorkOrdersSeeder');

        //
    }
}
