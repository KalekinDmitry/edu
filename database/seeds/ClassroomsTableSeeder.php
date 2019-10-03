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
        DB::table('classrooms')->delete();
        $teacherID= 1;
        $data = [
            [
                'name' => __('content.testclassroom',[],'ru'),
                'slug' =>Str::slug(__('content.testclassroom',[],'ru')),
                'teacher_id' => $teacherID,
            ],
            [
                'name' => __('content.testclassroom',[],'ru') . ' 2',
                'slug' =>Str::slug(__('content.testclassroom',[],'ru') . ' 2'),
                'teacher_id' => $teacherID,
            ],
        ];

        DB::table('classrooms')->insert($data);
    }
}
