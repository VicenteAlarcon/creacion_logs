<?php
namespace App\Services;
use App\Models\Video;

class GetVideosService 
{

    public function getAllVideos()
    {
        return Video::all();
    }

    public function getConcreteVideos($id)
    {
        return Video::find($id)
    }
}