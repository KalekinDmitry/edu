<?php

use Illuminate\Database\Seeder;

class ClassroomInvitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'title' => 'Test invite',
                'slug' =>Str::slug('test invite'),
                'message' => "You are wellcome!!",
                'classroom_id' => 1,
                'user_id' => 1,
            ]
        ];
        DB::table('classroom_invites')->insert($data);
    }
}
