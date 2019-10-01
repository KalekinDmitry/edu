<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ClassroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacherID= 1;
        $data = [
            [
                'name' => @lang('content.testclassroom'),
                'slug' =>Str::slug(@lang('content.testclassroom')),
                'teacher_id' => $teacherID,
            ],
            [
                'name' => @lang('content.testclassroom') . ' 2',
                'slug' =>Str::slug(@lang('content.testclassroom') . ' 2'),
                'teacher_id' => $teacherID,
            ],
        ];

        DB::table('classrooms')->insert($data);
    }
}
