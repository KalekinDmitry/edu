<?php

use Illuminate\Database\Seeder;

class TestAnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test_answers')->delete();
        for($i = 1; $i <= 6; $i++){
            $data = [
                [
                    'test_question_id' => $i, 
                    'text' => "42",
                    'is_correct' => true,
                ],
                [
                    'test_question_id' => $i, 
                    'text' => "солнце",
                    'is_correct' => true,
                ],
                [
                    'test_question_id' => $i,
                    'text' => 'марс',
                    'is_correct' => true,
                ],
                [
                    'test_question_id' => $i,
                    'text' => 'танк',
                    'is_correct' => true,
                ],
                [
                    'test_question_id' => $i, 
                    'text' => "aaa",
                    'is_correct' => false,
                ],
                [
                    'test_question_id' => $i, 
                    'text' => "bbb",
                    'is_correct' => false,
                ],
                [
                    'test_question_id' => $i, 
                    'text' => "ccc",
                    'is_correct' => false,
                ],
                [
                    'test_question_id' => $i, 
                    'text' => "ddd",
                    'is_correct' => false,
                ],
                [
                    'test_question_id' => $i, 
                    'text' => "eee",
                    'is_correct' => false,
                ],
            ];
            DB::table('test_answers')->insert($data);
        }
    }
}
