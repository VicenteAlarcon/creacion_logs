<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
      return view('videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('videos.create')
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $video = new Video();
        $video->name = $request->input('name');
        $video->category = $request->input('category');
        $video->duration = $request->input('duration');
        $video->save();

        return redirect()->route('videos.index')->withSuccess('Video creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
        return view('video.details', ['video' => $video]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
