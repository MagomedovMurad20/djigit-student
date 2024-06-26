<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert(
            [
                [
                    'name' => 'Alex',
                    'email' => 'alex@mail.ru',
                    'grade_id' => 6,
                ],
                [
                    'name' => 'Oleg',
                    'email' => 'olegx@mail.ru',
                    'grade_id' => 8,
                ],

            ]
        );
    }
}

