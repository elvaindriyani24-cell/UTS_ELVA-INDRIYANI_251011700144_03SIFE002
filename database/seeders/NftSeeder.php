<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NftSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('nfts')->insert([
            [
                'title' => 'Digital Dream',
                'creator' => 'Elva Art',
                'price_eth' => 0.0500,
                'image' => 'digital-dream.jpg',
                'collection' => 'Digital Art',
                'description' => 'Karya seni digital dengan perpaduan warna yang menarik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Galaxy World',
                'creator' => 'Nia Studio',
                'price_eth' => 0.0800,
                'image' => 'galaxy-world.jpg',
                'collection' => 'Space Collection',
                'description' => 'Karya seni digital bertema galaksi dan luar angkasa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Magic Butterfly',
                'creator' => 'Art Nusantara',
                'price_eth' => 0.0300,
                'image' => 'magic-butterfly.jpg',
                'collection' => 'Nature Art',
                'description' => 'Ilustrasi kupu-kupu dengan gaya artistik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}