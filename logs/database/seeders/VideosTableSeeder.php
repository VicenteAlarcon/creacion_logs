<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Video;
class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $video = new Video();
     $video->name = "Origen";
     $video->category ="Thriller";
     $video->duration =120;
     $video->save();


     $video = new Video();
     $video->name = "Casino";
     $video->category ="Thriller";
     $video->duration =180;
     $video->save();


     $video = new Video();
     $video->name = "Inglorius Bastards";
     $video->category ="Action";
     $video->duration =110;
     $video->save();


     $video = new Video();
     $video->name = "Kill Bill";
     $video->category ="Martial Arts";
     $video->duration =140;
     $video->save();
    }

}
