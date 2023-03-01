<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('video.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video'    => 'required|mimes:mp4,mov,avi,mkv|max:500048',
            'nama'      => 'required',
            'rating'      => 'required',
            'deskripsi'      => 'required|min:10'
        ]);

        // upload gambar
        $image = $request->file('gambar');
        $image->storeAs('public/thumbnail',$image->hashName());

        //upload video
        $video = $request->file('video');
        $video->storeAs('public/video',$video->hashName());

        // insert data to database
        Video::create([
            'gambar'    => $image->hashName(),
            'video'    => $video->hashName(),
            'rating'      => $request->rating,
            'nama'      => $request->nama,
            'deskripsi'      => $request->deskripsi
        ]);

        return redirect()->route('video.index')->with(['success' => 'successfully added data']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
