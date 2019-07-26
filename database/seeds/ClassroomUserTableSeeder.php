<?php

use Illuminate\Database\Seeder;

class ClassroomUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userID= 1;
        $classroomID = 1;

        $data = [
            [
                'user_id' => $userID,
                'classroom_id' => $classroomID
            ]
        ];

        DB::table('classroom_user')->insert($data);
    }
}
