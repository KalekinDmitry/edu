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
        $data = [
            [
                'task_block_id' => 1,
                'text' => @lang('content.sqtxtent'),
                'keywords' => @lang('content.sqtxtent'),
            ],
            [
                'task_block_id' => 2,
                'text' => @lang('content.sqtxtent'),
                'keywords' => @lang('content.sqtxtent'),
            ],
            [
                'task_block_id' => 2,
                'text' => @lang('content.sqtxtent'),
                'keywords' => @lang('content.sqtxtent'),
            ],

        ];

        DB::table('simple_questions')->insert($data);
    }
}
