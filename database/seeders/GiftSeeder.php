<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GiftSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('gifts')->insert([
            [
                'name' => 'Floral Wall Decor',
                'image' => 'images/Gifts/photo_2026-05-09_02-14-18.jpg',
                'price' => 320.00,
                'description' => 'Beautiful floral wall decoration piece, perfect for home decor.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Macrame Circle Hanger',
                'image' => 'images/Gifts/photo_2026-05-09_02-14-23.jpg',
                'price' => 280.00,
                'description' => 'Handcrafted macrame circle hanger for elegant wall decoration.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Boho Wall Wreath',
                'image' => 'images/Gifts/photo_2026-05-09_02-14-27.jpg',
                'price' => 350.00,
                'description' => 'Bohemian style wall wreath made with natural materials.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Golden Straw Wreath',
                'image' => 'images/Gifts/photo_2026-05-09_02-14-32.jpg',
                'price' => 300.00,
                'description' => 'Elegant golden straw wreath for festive home decoration.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tassel Wall Hanging',
                'image' => 'images/Gifts/photo_2026-05-09_02-14-37.jpg',
                'price' => 260.00,
                'description' => 'Stylish tassel wall hanging to add a boho touch to any room.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ceramic Plate Set',
                'image' => 'images/Gifts/photo_2026-05-09_02-14-41.jpg',
                'price' => 450.00,
                'description' => 'Handpainted ceramic plate set, a perfect gift for any occasion.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wooden Stationery Set',
                'image' => 'images/Gifts/photo_2026-05-09_02-14-45.jpg',
                'price' => 380.00,
                'description' => 'Premium wooden stationery gift set for work and creativity.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Handmade Gift Basket',
                'image' => 'images/Gifts/photo_2026-05-09_02-14-50.jpg',
                'price' => 500.00,
                'description' => 'Curated handmade gift basket filled with unique artisan products.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Luxury Candle Gift Set',
                'image' => 'images/Gifts/photo_2026-05-09_02-14-55.jpg',
                'price' => 420.00,
                'description' => 'Premium scented candle gift set for a relaxing atmosphere.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dried Flower Arrangement',
                'image' => 'images/Gifts/photo_2026-05-09_02-15-00.jpg',
                'price' => 340.00,
                'description' => 'Elegant dried flower arrangement, a timeless gift for loved ones.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aromatic Gift Box',
                'image' => 'images/Gifts/photo_2026-05-09_02-15-06.jpg',
                'price' => 460.00,
                'description' => 'Luxurious aromatic gift box with handpicked scented products.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Minimalist Wall Art',
                'image' => 'images/Gifts/photo_2026-05-09_02-15-11.jpg',
                'price' => 290.00,
                'description' => 'Modern minimalist wall art piece to complement any interior.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Boho Dream Catcher',
                'image' => 'images/Gifts/photo_2026-05-09_02-15-15.jpg',
                'price' => 310.00,
                'description' => 'Handcrafted boho dream catcher, a unique and meaningful gift.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}