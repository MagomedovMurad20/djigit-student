<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentLessonSeeder extends Seeder
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
                    'student_id' => '1',
                    'lesson_id' => '1',
                ],
                [
                    'student_id' => '2',
                    'lesson_id' => '2',
                ],
                [
                    'theme' => 'Algos',
                    'description' => 'About algo',
                ],

            ]
        );
    }
}
