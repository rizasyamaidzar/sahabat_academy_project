<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Berita;
use App\Models\Galery;
use App\Models\Jadwal;
use App\Models\Program;
use App\Models\Category;
use App\Models\Dokumentasi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Galery::factory(5)->create();

        Dokumentasi::factory(20)->create();

        Berita::factory(20)->create();

        Category::factory(5)->create();
        Program::factory(5)->create();
        Jadwal::factory(5)->create();
    }
}
