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
        DB::table('modules')->delete();
        $data = [
            [
                'name' => __('content.module',[],'ru') . ' 1' . __('content.ofcourse',[],'ru') . ' 1',
                'position' => 0,
                'course_id' => 1,
            ],
            [
                'name' => __('content.module',[],'ru') . ' 2' . __('content.ofcourse',[],'ru') . ' 1',
                'position' => 1,
                'course_id' => 1
            ],
            [
                'name' => __('content.module',[],'ru') . ' 1' . __('content.ofcourse',[],'ru') . ' 2',
                'position' => 0,
                'course_id' => 2
            ]
        ];

        DB::table('modules')->insert($data);
    }
}
