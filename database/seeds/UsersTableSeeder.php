<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $data = [
            [
                'name' => 'Иван',
                'email' => 'user@mail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Игорь',
                'email' => 'user2@mail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Анатолий',
                'email' => 'user3@mail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Виталий',
                'email' => 'anotherUser@mail.com',
                'password' => Hash::make('password'),
            ],
        ];

        DB::table('users')->insert($data);
    }
}
