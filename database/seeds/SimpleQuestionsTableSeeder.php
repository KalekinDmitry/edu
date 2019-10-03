<?php

use Illuminate\Database\Seeder;

class SimpleQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('simple_questions')->delete();
        $data = [
            [
                'task_block_id' => 1,
                'text' => __('content.sqtxtent',[],'ru'),
                'keywords' => __('content.sqtxtent',[],'ru'),
            ],
            [
                'task_block_id' => 2,
                'text' => __('content.sqtxtent',[],'ru'),
                'keywords' => __('content.sqtxtent',[],'ru'),
            ],
            [
                'task_block_id' => 2,
                'text' => __('content.sqtxtent',[],'ru'),
                'keywords' => __('content.sqtxtent',[],'ru'),
            ],

        ];

        DB::table('simple_questions')->insert($data);
    }
}
