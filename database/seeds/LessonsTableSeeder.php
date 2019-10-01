<?php

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $moduleId = 1;
        $data = [
            [
                'title' => @lang('content.testlesson') . ' 0',
                'slug' => Str::slug(@lang('content.testlesson') . ' 0'),
                'excerpt' => @lang('content.testlessonexcerpt') . ' 0',
                'module_id' => 1,
                'position' => 0,
            ],
            [
                'title' => @lang('content.testlesson') . ' 1',
                'slug' => Str::slug(@lang('content.testlesson') . ' 1'),
                'excerpt' => @lang('content.testlessonexcerpt') . ' 1',
                'module_id' => 1,
                'position' => 1
            ],
            [
                'title' => @lang('content.testlesson') . ' 2',
                'slug' => Str::slug(@lang('content.testlesson') . ' 2'),
                'excerpt' => @lang('content.testlessonexcerpt') . ' 2',
                'module_id' => 1,
                'position' => 2
            ],
            [
                'title' => @lang('content.testlesson') . ' 0',
                'slug' => Str::slug(@lang('content.testlesson') . ' 0'),
                'excerpt' => @lang('content.testlessonexcerpt') . ' 0',
                'module_id' => 2,
                'position' => 0
            ],
            [
                'title' => @lang('content.testlesson') . ' 1',
                'slug' => Str::slug(@lang('content.testlesson') . ' 1'),
                'excerpt' => @lang('content.testlessonexcerpt') . ' 1',
                'module_id' => 2,
                'position' => 1
            ],

        ];

        DB::table('lessons')->insert($data);
    }
}
