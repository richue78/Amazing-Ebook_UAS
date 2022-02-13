<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $genders = [
            [
                'id' => 1,
                'gender_desc' => 'Male'
            ],
            [
                'id' => 2,
                'gender_desc' => 'Female'
            ]
        ];
        DB::table('genders')->insert($genders);
    }
}
