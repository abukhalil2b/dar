<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
                    ['first_name'=>'الإدارة',
                    'email'=>'admin@dar.com',
                    'user_type'=>'admin',
                    'plain_password'=>'111111',
                    'password'=>Hash::make('111111')],
                    ['first_name'=>'ابراهيم 1',
                    'email'=>'teacher1@dar.com',
                    'user_type'=>'teacher',
                    'plain_password'=>'111111',
                    'password'=>Hash::make('111111')],
                    ['first_name'=>'ابراهيم 2',
                    'email'=>'teacher2@dar.com',
                    'user_type'=>'teacher',
                    'plain_password'=>'111111',
                    'password'=>Hash::make('111111')],
                    ['first_name'=>'ابراهيم 3',
                    'email'=>'teacher3@dar.com',
                    'user_type'=>'teacher',
                    'plain_password'=>'111111',
                    'password'=>Hash::make('111111')],
                    ['first_name'=>'ابراهيم 4',
                    'email'=>'teacher4@dar.com',
                    'user_type'=>'teacher',
                    'plain_password'=>'111111',
                    'password'=>Hash::make('111111')]
            ];

        foreach ($users as $user) {
            App\User::create($user);   
        }
        
    }
}
