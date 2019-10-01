<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => @lang('content.module') . ' 1' . @lang('content.ofcourse') . ' 1',
                'position' => 0,
                'course_id' => 1,
            ],
            [
                'name' => @lang('content.module') . ' 2' . @lang('content.ofcourse') . ' 1',
                'position' => 1,
                'course_id' => 1
            ],
            [
                'name' => @lang('content.module') . ' 1' . @lang('content.ofcourse') . ' 2',
                'position' => 0,
                'course_id' => 2
            ]
        ];

        DB::table('modules')->insert($data);
    }
}
