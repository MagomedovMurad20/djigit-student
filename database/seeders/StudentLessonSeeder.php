<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_lesson')->insert(
            [
                [
                    'student_id' => '1',
                    'lesson_id' => '1',
                ],
                [
                    'student_id' => '2',
                    'lesson_id' => '2',
                ],

            ]
        );
    }
}
