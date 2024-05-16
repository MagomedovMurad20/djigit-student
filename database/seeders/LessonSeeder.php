<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert(
            [
                [
                    'theme' => 'PHP SOLID',
                    'description' => 'About SOLID',
                ],
                [
                    'theme' => 'System Sesign',
                    'description' => 'About System Design',
                ],
                [
                    'theme' => 'Algos',
                    'description' => 'About algo',
                ],

            ]
        );
    }
}
