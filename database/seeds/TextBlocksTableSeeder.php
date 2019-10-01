<?php

use Illuminate\Database\Seeder;

class TextBlocksTableSeeder extends Seeder
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
                'lesson_id' => 1,
                'position' => 0,

                'content' => @lang('content.textbloxsample'),

                ],
                [
                    'lesson_id' => 1,
                    'position' => 1,
    
                    'content' => @lang('content.textbloxsample'),
    
                    ],
                    [
                        'lesson_id' => 2,
                        'position' => 0,
        
                        'content' => @lang('content.textbloxsample'),
        
                    ]
        ];

        DB::table('text_blocks')->insert($data);
    }
}
