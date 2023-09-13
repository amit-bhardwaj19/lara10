<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create(
            [
                'post_id' => 1,
                'content' => fake()->text()
            ]);
        Comment::create([
            'post_id' => 2,
            'content'   => fake()->text()
        ]);
        Comment::create([
            'post_id' => 1,
            'content'   => fake()->text()
        ]);
        Comment::create([
            'post_id' => 2,
            'content'   => fake()->text()
        ]);
        Comment::create([
            'post_id' => 1,
            'content'   => fake()->text()
        ]);
    }
}
