<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Handmade Linen Tote Bag',
                'image' => 'products/tote.jpg',
                'price' => 250.00,
                'description' => 'A beautiful handmade linen tote bag perfect for everyday use.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Macrame Wall Hanging',
                'image' => 'products/macrame.jpg',
                'price' => 450.00,
                'description' => 'Elegant macrame wall hanging handcrafted with natural cotton rope.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ceramic Mug',
                'image' => 'products/mug.jpg',
                'price' => 180.00,
                'description' => 'Handpainted ceramic mug, unique and beautiful.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}