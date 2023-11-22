<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        Category::create([
            "name" => "Programming",
            "slug" => "Programming"
        ]);

        Category::create([
            "name" => "Poem",
            "slug" => "Poem"
        ]);
        Category::create([
            "name" => "Fiction",
            "slug" => "Fiction"
        ]);
        Category::create([
            "name" => "science",
            "slug" => "science"
        ]);



        Post::factory(20)->create();
    }
}
