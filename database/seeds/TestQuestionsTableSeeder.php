<?php

use Illuminate\Database\Seeder;

class TestQuestionsTableSeeder extends Seeder
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
                'text' => @lang('content.testquestiontext1'),
                'correct_count' => 1,
                'wrong_count' => 3,
            ],
            [
                'task_block_id' => 1,
                'text' => @lang('content.testquestiontext2'),
                'correct_count' => 3,
                'wrong_count' => 1,
            ],
            [
                'task_block_id' => 2,
                'text' => @lang('content.testquestiontext1'),
                'correct_count' => 1,
                'wrong_count' => 3,
            ],
            [
                'task_block_id' => 2,
                'text' => @lang('content.testquestiontext2'),
                'correct_count' => 3,
                'wrong_count' => 1,
            ],
            [
                'task_block_id' => 3,
                'text' => @lang('content.testquestiontext1'),
                'correct_count' => 1,
                'wrong_count' => 3,
            ],
            [
                'task_block_id' => 3,
                'text' => @lang('content.testquestiontext2'),
                'correct_count' => 3,
                'wrong_count' => 1,
            ],

        ];

        DB::table('test_questions')->insert($data);
    }
}
