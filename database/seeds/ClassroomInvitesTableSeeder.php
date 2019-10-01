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
                'classroom_id' => 1,
                'user_id' => 1,
                'message_title' => @lang('content.invtitle'),
                'title_slug' => Str::slug(@lang('content.invtitle')),
                'message_text' => @lang('content.invtext'),

            ]
        ];
        DB::table('classroom_invites')->insert($data);
    }
}
