<?php

namespace App\Http\Controllers;
use App\Services\GetVideosService;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Log;
class VideoController extends Controller
{

   /**
    * Controlador para la intección de dependencias
    */
    protected $videoService;

    public function __construct(GetVideosService $videoService) 
    {

     $this->videoService = $videoService;

    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $videos = $this->videoService->getAllVideos();
      return view('videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('videos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $video = Video::create([
        'name' => $request->input('name'),
        'category' => $request->input('category'),
        'duration' => $request->input('duration'),
        ]);
         Log::create([
            'name'=>"Crear",
            'description' => 'Se ha creado el video '.$request->input('name'),
         ]);

        return redirect()->route('videos.index')->withSuccess('Video creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $video = $this->videosService->getConcreteVideos($id);
        return view('video.details', ['video' => $video]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $video = $this->videosService->getConcreteVideos($id);
        return view('video.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $video = $this->videosService->getConcreteVideos($id);
        $video->update([
            'name' => $request->input('name'),
            'category' => $request->input('category'),
            'duration' => $request->input('duration'),
        ]);
        return redirect()->route('videos.edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $video = $this->videosService->getConcreteVideos($id);
        $video->delete();
    }
}
