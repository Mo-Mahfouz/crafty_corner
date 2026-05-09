<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ✅ Admin User
        User::create([
            'name' => 'Admin',
            'email' => 'admin@craftycorner.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        // ✅ Test User عادي
        User::create([
            'name' => 'Test User',
            'email' => 'test@craftycorner.com',
            'password' => Hash::make('user123'),
            'role' => 'user',
        ]);
    }
}