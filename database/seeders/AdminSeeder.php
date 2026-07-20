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
            'name' => 'Viewer',
            'email' => 'viewer@ccrid.com',
            'password' => Hash::make('viewer_ccr'),
            'role' => 'viewer',
        ]);
    }
}
