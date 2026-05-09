<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ✅ Users
        User::create([
            'name' => 'Admin',
            'email' => 'admin@craftycorner.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Test User',
            'email' => 'test@craftycorner.com',
            'password' => Hash::make('user123'),
            'role' => 'user',
        ]);

        // ✅ باقي البيانات
        $this->call([
            ProductSeeder::class,
            BabyClothesSeeder::class,
            EmbroiderySeeder::class,
            GiftSeeder::class,
        ]);
    }
}