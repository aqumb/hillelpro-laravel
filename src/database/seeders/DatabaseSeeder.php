<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\CategoryFactory;
use Database\Factories\CommentFactory;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::factory()->count(10)->create();
        Category::all()->each(function ($category) {
            Post::factory()->count(20)->create(['category_id' => $category->id]);
        });
        Post::all()->each(function ($post) {
            Comment::factory()->count(25)->create(['post_id' => $post->id]);
        });
    }
}
