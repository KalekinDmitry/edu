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
                'course_id' => 1
            ],
            [
                'title' => 'Test lesson 1',
                'slug' => Str::slug('Test lesson 1'),
                'excerpt' => 'This is an excerpt from test lesson 1',
                'content_html' => 'This is a content of test lesson 1',
                'video_link' => '#',
                'course_id' => 1
            ],
            [
                'title' => 'Test lesson 2',
                'slug' => Str::slug('Test lesson 2'),
                'excerpt' => 'This is an excerpt from test lesson 2',
                'content_html' => 'This is a content of test lesson 2',
                'video_link' => '#',
                'course_id' => 1
            ],
            [
                'title' => 'Test lesson 0',
                'slug' => Str::slug('Test lesson 0'),
                'excerpt' => 'This is an excerpt from test lesson 0',
                'content_html' => 'This is a content of test lesson 0',
                'video_link' => '#',
                'course_id' => 2
            ],
            [
                'title' => 'Test lesson 1',
                'slug' => Str::slug('Test lesson 1'),
                'excerpt' => 'This is an excerpt from test lesson 1',
                'content_html' => 'This is a content of test lesson 1',
                'video_link' => '#',
                'course_id' => 2
            ],

        ];

        DB::table('lessons')->insert($data);
    }
}
