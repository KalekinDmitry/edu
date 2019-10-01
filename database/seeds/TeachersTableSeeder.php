<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->delete();
        $data = [
            [
                'name' => 'Эйнштейн',
                'email' => 'teacher@mail.com',
                'password' => Hash::make('password')
            ]
        ];

        DB::table('teachers')->insert($data);
    }
}
