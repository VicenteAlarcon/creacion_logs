<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Factory as Faker;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $faker = Faker::create();

        $post= new Post();
        $post->name = "Post numero uno";
        $post->description ="Este es el post numero uno";
        $post->save();

        $post= new Post();
        $post->name = "Estudio de la lógica de programación";
        $post->description ="Estudio sobre la lógica aplicada a la programación";
        $post->save();


        $post= new Post();
        $post->name = "Los toreros muertos";
        $post->description ="Un recorrido por la música de este conocido grupo";
        $post->save();


        $post= new Post();
        $post->name = "El arte de la guerra";
        $post->description ="Libro de referencia para la psicología";
        $post->save();


    }
}
