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
        $data = [
            [
                'name' => 'userName',
                'email' => 'user@mail.com',
                'password' => Hash::make('password'),
            ]
        ];

        DB::table('users')->insert($data);
    }
}
