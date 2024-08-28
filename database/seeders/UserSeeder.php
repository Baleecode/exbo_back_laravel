<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'mrbell',
                'email' => 'bel@gmail.com',
                'password' => Hash::make('12345'),
                'created_at'=>'2024-08-23 10:27:49',
                'updated_at'=>'2024-08-23 10:27:49',
            ],
            [
                'username' => 'eko',
                'email' => 'eko@gmail.com',
                'password' => Hash::make('12345'),
                'created_at'=>'2024-08-23 10:27:49',
                'updated_at'=>'2024-08-23 10:27:49',
            ],
            [
                'username' => 'peleb',
                'email' => 'peleb@gmail.com',
                'password' => Hash::make('12345'),
                'created_at'=>'2024-08-23 10:27:49',
                'updated_at'=>'2024-08-23 10:27:49',
            ],
        ];
       foreach ($users as $userItem){
            User::create($userItem);
       }
    }
}
