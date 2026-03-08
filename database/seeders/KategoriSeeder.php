<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kategori::factory(3)->create();
        Kategori::create([
            'name' => 'opini',
            'slug' => 'ini-opini'
        ]);
                Kategori::create([
            'name' => 'berita terbaru',
            'slug' => 'ini-berita-terbaru'
        ]); 
               Kategori::create([
            'name' => 'terkait',
            'slug' => 'terkait'
        ]);
                Kategori::create([
            'name' => 'event',
            'slug' => 'event'
        ]);
    }
}
