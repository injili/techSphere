<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post:all()->each(function ($post) {
            Comment::factory(10)->create([
                'post_id' => $post->id,
                'user_id' => $post->user_id
            ]);
        });
    }
}
