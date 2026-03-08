<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // User::factory(4)->create();
        // Kategori::factory(4)->create();
        // Post::factory(100)->create();

        $this->call([KategoriSeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Kategori::all(),
            User::all()
        ])->create();
    }

}
