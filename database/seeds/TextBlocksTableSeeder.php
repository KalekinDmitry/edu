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
        DB::table('text_blocks')->delete();
        $data = [
            [
                'lesson_id' => 1,
                'position' => 0,

                'content' => __('content.textbloxsample',[],'ru'),

                ],
                [
                    'lesson_id' => 1,
                    'position' => 1,
    
                    'content' => __('content.textbloxsample',[],'ru'),
    
                    ],
                    [
                        'lesson_id' => 2,
                        'position' => 0,
        
                        'content' => __('content.textbloxsample',[],'ru'),
        
                    ]
        ];

        DB::table('text_blocks')->insert($data);
    }
}
