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
        $creatorId = 1;
        //
        $data = [
            [
                'title' => @lang('content.testcourse') . ' 0',
                'slug' => Str::slug(@lang('content.testcourse') . ' 0'),
                'description_short' => @lang('content.tcshortdesc') . ' 0',
                'description' => @lang('content.tcdesc') . ' 0',
                'tags' => @lang('content.taglist'),
                'image' => '#',
                'video' => '#',
                'created_by' => $creatorId
            ],
            [
                'title' => @lang('content.testcourse') . ' 1',
                'slug' => Str::slug(@lang('content.testcourse') . ' 1'),
                'description_short' => @lang('content.tcshortdesc') . ' 1',
                'description' => @lang('content.tcdesc') . ' 1',
                'tags' => @lang('content.taglist'),
                'image' => '#',
                'video' => '#',
                'created_by' => $creatorId
            ],
            [
                'title' => @lang('content.testcourse') . ' 2',
                'slug' => Str::slug(@lang('content.testcourse') . ' 2'),
                'description_short' => @lang('content.tcshortdesc') . ' 2',
                'description' => @lang('content.tcdesc') . ' 2',
                'tags' => @lang('content.taglist'),
                'image' => '#',
                'video' => '#',
                'created_by' => $creatorId
            ],
            [
                'title' => @lang('content.testcourse') . ' 3',
                'slug' => Str::slug(@lang('content.testcourse') . ' 3'),
                'description_short' => @lang('content.tcshortdesc') . ' 3',
                'description' => @lang('content.tcdesc') . ' 3',
                'tags' => @lang('content.taglist'),
                'image' => '#',
                'video' => '#',
                'created_by' => $creatorId
            ]
        ];

        DB::table('courses')->insert($data);
    }
}
