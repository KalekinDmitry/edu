<?php

use Illuminate\Database\Seeder;

class ClassroomCourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classroomID = 1;
        $courseID = 1;

        $data = [
            [
                'classroom_id' => $classroomID,
                'course_id' => $courseID
            ]
        ];

        DB::table('classroom_course')->insert($data);
    }
}
