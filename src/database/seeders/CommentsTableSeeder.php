<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            'content' => 'Best news',
            'post_id' => 1,
        ]);

        DB::table('comments')->insert([
            'content' => 'Best positions',
            'post_id' => 2,
        ]);

        DB::table('comments')->insert([
            'content' => 'Best twits',
            'post_id' => 3,
        ]);
    }
}
