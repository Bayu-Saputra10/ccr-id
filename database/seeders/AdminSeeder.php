<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate([
            'name' => 'Admin',
            'email' => 'admin@ccrid.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::firstOrCreate([
            'name' => 'User',
            'email' => 'user001@ccrid.com',
            'password' => Hash::make('user_ccrid1'),
            'role' => 'viewer',
        ]);

        User::firstOrCreate([
            'name' => 'Budi',
            'email' => 'user002@ccrid.com',
            'password' => Hash::make('user_ccrid2'),
            'role' => 'viewer',
        ]);

        User::firstOrCreate([
            'name' => 'Andi',
            'email' => 'user003@ccrid.com',
            'password' => Hash::make('user_ccrid3'),
            'role' => 'viewer',
        ]);

        User::firstOrCreate([
            'name' => 'Dina',
            'email' => 'user004@ccrid.com',
            'password' => Hash::make('user_ccrid4'),
            'role' => 'viewer',
        ]);

        User::firstOrCreate([
            'name' => 'Ani',
            'email' => 'user005@ccrid.com',
            'password' => Hash::make('user_ccrid5'),
            'role' => 'viewer',
        ]);
    }
}
