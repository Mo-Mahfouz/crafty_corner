<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BabyClothesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('baby_clothes_products')->insert([
            [
                'name' => 'Newborn Knitted Set',
                'image' => 'images/Baby_clothes/photo_2026-05-09_02-13-38.jpg',
                'price' => 250.00,
                'description' => 'Soft knitted newborn set, perfect for the first days of life.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Baby Girl White Dress',
                'image' => 'images/Baby_clothes/photo_2026-05-09_02-13-43.jpg',
                'price' => 350.00,
                'description' => 'Elegant white baby dress for special occasions.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Classic Baby Outfit',
                'image' => 'images/Baby_clothes/photo_2026-05-09_02-13-48.jpg',
                'price' => 300.00,
                'description' => 'Classic and comfortable baby outfit for everyday wear.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Baby Photo Shoot Dress',
                'image' => 'images/Baby_clothes/photo_2026-05-09_02-13-54.jpg',
                'price' => 420.00,
                'description' => 'Beautiful dress designed for baby photo shoots.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Princess Baby Dress',
                'image' => 'images/Baby_clothes/photo_2026-05-09_02-13-58.jpg',
                'price' => 380.00,
                'description' => 'Adorable princess-style baby dress with delicate details.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Colorful Baby Costume',
                'image' => 'images/Baby_clothes/photo_2026-05-09_02-14-04.jpg',
                'price' => 290.00,
                'description' => 'Fun and colorful baby costume for parties and celebrations.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vintage Baby Set',
                'image' => 'images/Baby_clothes/photo_2026-05-09_02-14-09.jpg',
                'price' => 320.00,
                'description' => 'Charming vintage-style baby clothing set.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Winter Baby Hat & Coat',
                'image' => 'images/Baby_clothes/photo_2026-05-09_02-14-14.jpg',
                'price' => 280.00,
                'description' => 'Warm winter coat and hat set to keep your baby cozy.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Soft Baby Romper',
                'image' => 'images/Baby_clothes/photo_2026-05-09_02-13-18.jpg',
                'price' => 220.00,
                'description' => 'Super soft romper for everyday comfort.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}