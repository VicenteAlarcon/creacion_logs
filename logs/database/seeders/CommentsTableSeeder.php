<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use Faker\Factory as Faker;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $comment = new Comment();
        $comment->comment="Me ha gustado muchísimo";
        $comment->commentable_id = $faker->numberBetween(1, 4);
        $comment->commentable_type = "App\Models\Videos";
        $comment->save();


        $faker = Faker::create();
        $comment = new Comment();
        $comment->comment="No me ha gustado nada";
        $comment->commentable_id = $faker->numberBetween(1, 4);
        $comment->commentable_type = "App\Models\Post";
        $comment->save();


        $faker = Faker::create();
        $comment = new Comment();
        $comment->comment="Me parece rarísimo";
        $comment->commentable_id = $faker->numberBetween(1, 4);
        $comment->commentable_type = "App\Models\Videos";
        $comment->save();


        $faker = Faker::create();
        $comment = new Comment();
        $comment->comment="Es increible este post";
        $comment->commentable_id = $faker->numberBetween(1, 4);
        $comment->commentable_type = "App\Models\Post";
        $comment->save();
    }
}
