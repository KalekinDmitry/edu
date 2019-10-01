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
        DB::table('classroom_invites')->delete();
        $data = [
            [
                'classroom_id' => 1,
                'user_id' => 1,
                'message_title' => __('content.invtitle',[],'ru'),
                'title_slug' => Str::slug(__('content.invtitle',[],'ru')),
                'message_text' => __('content.invtext',[],'ru'),

            ]
        ];
        DB::table('classroom_invites')->insert($data);
    }
}
