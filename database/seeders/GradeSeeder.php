<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert(
            [
                [
                    'name' => 'first',
                ],
                [
                    'name' => 'second',
                ],
                [
                    'name' => 'third',
                ],
                [
                    'name' => 'forth',
                ],
                [
                    'name' => 'fifth',
                ],
                [
                    'name' => 'sixth',
                ],
                [
                    'name' => 'seventh',
                ],
                [
                    'name' => 'eighth',
                ],
                [
                    'name' => 'ninth',
                ],
                [
                    'name' => 'tenth',
                ],

            ]
        );
    }
}
