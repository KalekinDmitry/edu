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
                'title' => 'Test course 0',
                'slug' => Str::slug('Test course 0'),
                'description_short' => 'This is a short description of test course 0',
                'description' => 'This is a description of test course 0',
                'tags' => 'tag0, tag1',
                'image' => '#',
                'video' => '#',
                'created_by' => $creatorId
            ]
        ];

        DB::table('courses')->insert($data);
    }
}
