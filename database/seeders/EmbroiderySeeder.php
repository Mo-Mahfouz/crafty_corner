<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmbroiderySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('embroidery')->insert([
            [
                'name' => 'Floral Embroidered Frame',
                'image' => 'images/Embroideries/photo_2026-05-09_02-12-40.jpg',
                'price' => 350.00,
                'description' => 'Handcrafted floral embroidery in a beautiful wooden frame.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Embroidered Cushion Cover',
                'image' => 'images/Embroideries/photo_2026-05-09_02-12-49.jpg',
                'price' => 280.00,
                'description' => 'Elegant cushion cover with hand-embroidered floral patterns.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Golden Thread Embroidery',
                'image' => 'images/Embroideries/photo_2026-05-09_02-12-55.jpg',
                'price' => 420.00,
                'description' => 'Luxurious embroidery piece with golden thread detailing.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Colorful Silk Embroidery',
                'image' => 'images/Embroideries/photo_2026-05-09_02-13-00.jpg',
                'price' => 380.00,
                'description' => 'Vibrant silk embroidery with rich colors and intricate patterns.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Custom Name Embroidery',
                'image' => 'images/Embroideries/photo_2026-05-09_02-13-04.jpg',
                'price' => 300.00,
                'description' => 'Personalized embroidery piece with your name or special message.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Amour Wall Art',
                'image' => 'images/Embroideries/photo_2026-05-09_02-13-09.jpg',
                'price' => 450.00,
                'description' => 'Romantic embroidered wall art, perfect as a gift for loved ones.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Luxury Gift Embroidery Set',
                'image' => 'images/Embroideries/photo_2026-05-09_02-13-13.jpg',
                'price' => 600.00,
                'description' => 'Premium embroidery gift set beautifully packaged for special occasions.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Embroidered Perfume Box',
                'image' => 'images/Embroideries/photo_2026-05-09_02-13-23.jpg',
                'price' => 520.00,
                'description' => 'Elegant embroidered box set with premium perfume collection.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Blue Luxury Embroidery Box',
                'image' => 'images/Embroideries/photo_2026-05-09_02-13-29.jpg',
                'price' => 580.00,
                'description' => 'Sophisticated blue embroidery gift box for luxury gifting.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Royal Embroidery Collection',
                'image' => 'images/Embroideries/photo_2026-05-09_02-13-33.jpg',
                'price' => 650.00,
                'description' => 'Exclusive royal embroidery collection with premium packaging.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}