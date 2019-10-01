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
        DB::table('lessons')->delete();
        $moduleId = 1;
        $data = [
            [
                'title' => __('content.testlesson',[],'ru') . ' 0',
                'slug' => Str::slug(__('content.testlesson',[],'ru') . ' 0'),
                'excerpt' => __('content.testlessonexcerpt',[],'ru') . ' 0',
                'module_id' => 1,
                'position' => 0,
            ],
            [
                'title' => __('content.testlesson',[],'ru') . ' 1',
                'slug' => Str::slug(__('content.testlesson',[],'ru') . ' 1'),
                'excerpt' => __('content.testlessonexcerpt',[],'ru') . ' 1',
                'module_id' => 1,
                'position' => 1
            ],
            [
                'title' => __('content.testlesson',[],'ru') . ' 2',
                'slug' => Str::slug(__('content.testlesson',[],'ru') . ' 2'),
                'excerpt' => __('content.testlessonexcerpt',[],'ru') . ' 2',
                'module_id' => 1,
                'position' => 2
            ],
            [
                'title' => __('content.testlesson',[],'ru') . ' 0',
                'slug' => Str::slug(__('content.testlesson',[],'ru') . ' 0'),
                'excerpt' => __('content.testlessonexcerpt',[],'ru') . ' 0',
                'module_id' => 2,
                'position' => 0
            ],
            [
                'title' => __('content.testlesson',[],'ru') . ' 1',
                'slug' => Str::slug(__('content.testlesson',[],'ru') . ' 1'),
                'excerpt' => __('content.testlessonexcerpt',[],'ru') . ' 1',
                'module_id' => 2,
                'position' => 1
            ],

        ];

        DB::table('lessons')->insert($data);
    }
}
