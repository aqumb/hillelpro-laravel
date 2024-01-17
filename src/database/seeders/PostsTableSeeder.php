<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'title 1',
            'content' => 'Content 1',
            'category_id' => 1,
        ]);

        DB::table('posts')->insert([
            'title' => 'title 2',
            'content' => 'Content 2',
            'category_id' => 2,
        ]);

        DB::table('posts')->insert([
            'title' => 'title 3',
            'content' => 'Content 3',
            'category_id' => 3,
        ]);
    }
}
