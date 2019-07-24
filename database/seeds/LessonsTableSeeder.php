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
        $courseId = 1;
        $data = [
            [
                'title' => 'Test lesson 0',
                'slug' => Str::slug('Test lesson 0'),
                'excerpt' => 'This is an excerpt from test lesson 0',
                'content_html' => 'This is a content of test lesson 0',
                'video_link' => '#',
                'course_id' => $courseId
            ]
        ];

        DB::table('lessons')->insert($data);
    }
}
