<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@ccrid.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );

        User::updateOrCreate(
            ['email' => 'user001@ccrid.com'],
            [
                'name' => 'User',
                'password' => Hash::make('user_ccrid1'),
                'role' => 'viewer',
            ]
        );

        User::updateOrCreate(
            ['email' => 'user002@ccrid.com'],
            [
                'name' => 'Budi',
                'password' => Hash::make('user_ccrid2'),
                'role' => 'viewer',
            ]
        );

        User::updateOrCreate(
            ['email' => 'user003@ccrid.com'],
            [
                'name' => 'Andi',
                'password' => Hash::make('user_ccrid3'),
                'role' => 'viewer',
            ]
        );

        User::updateOrCreate(
            ['email' => 'user004@ccrid.com'],
            [
                'name' => 'Dina',
                'password' => Hash::make('user_ccrid4'),
                'role' => 'viewer',
            ]
        );

        User::updateOrCreate(
            ['email' => 'user005@ccrid.com'],
            [
                'name' => 'Ani',
                'password' => Hash::make('user_ccrid5'),
                'role' => 'viewer',
            ]
        );
    }
}