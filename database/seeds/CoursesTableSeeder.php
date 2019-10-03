<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->delete();
        $creatorId = 1;
        //
        $data = [
            [
                'title' => __('content.testcourse',[],'ru') . ' 0',
                'slug' => Str::slug(__('content.testcourse',[],'ru') . ' 0'),
                'description_short' => __('content.tcshortdesc',[],'ru') . ' 0',
                'description' => __('content.tcdesc',[],'ru') . ' 0',
                'tags' => __('content.taglist',[],'ru'),
                'image' => '#',
                'video' => '#',
                'created_by' => $creatorId
            ],
            [
                'title' => __('content.testcourse',[],'ru') . ' 1',
                'slug' => Str::slug(__('content.testcourse',[],'ru') . ' 1'),
                'description_short' => __('content.tcshortdesc',[],'ru') . ' 1',
                'description' => __('content.tcdesc',[],'ru') . ' 1',
                'tags' => __('content.taglist',[],'ru'),
                'image' => '#',
                'video' => '#',
                'created_by' => $creatorId
            ],
            [
                'title' => __('content.testcourse',[],'ru') . ' 2',
                'slug' => Str::slug(__('content.testcourse',[],'ru') . ' 2'),
                'description_short' => __('content.tcshortdesc',[],'ru') . ' 2',
                'description' => __('content.tcdesc',[],'ru') . ' 2',
                'tags' => __('content.taglist',[],'ru'),
                'image' => '#',
                'video' => '#',
                'created_by' => $creatorId
            ],
            [
                'title' => __('content.testcourse',[],'ru') . ' 3',
                'slug' => Str::slug(__('content.testcourse',[],'ru') . ' 3'),
                'description_short' => __('content.tcshortdesc',[],'ru') . ' 3',
                'description' => __('content.tcdesc',[],'ru') . ' 3',
                'tags' => __('content.taglist'),
                'image' => '#',
                'video' => '#',
                'created_by' => $creatorId
            ]
        ];

        DB::table('courses')->insert($data);
    }
}
