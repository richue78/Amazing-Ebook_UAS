<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = [
            [
                'id' => 1,
                'role_desc' => 'Admin'
            ],
            [
                'id' => 2,
                'role_desc' => 'User'
            ]
        ];
        DB::table('roles')->insert($roles);

    }
}
