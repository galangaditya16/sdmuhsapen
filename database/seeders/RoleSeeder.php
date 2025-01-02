<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('roles')->insert([
            [
                'id'        => '2024010201',
                'name'      => 'Superadmin',
                'guard_name'=> 'web',
            ],[
                'id'        => '2024010202',
                'name'      =>'Admin',
                'guard_name'=>'web',
            ]
        ]);
    }
}
