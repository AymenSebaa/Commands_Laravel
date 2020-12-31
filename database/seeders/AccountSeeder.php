<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commandes_accounts')->insert([ 'code' => 0, 'name' => 'Client']);
        DB::table('commandes_accounts')->insert([ 'code' => 1, 'name' => 'Deliverer']);
        DB::table('commandes_accounts')->insert([ 'code' => 2, 'name' => 'Restaurant']);
        DB::table('commandes_accounts')->insert([ 'code' => 3, 'name' => 'Moderator']);
        DB::table('commandes_accounts')->insert([ 'code' => 4, 'name' => 'Admin']);

    }
}
