<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class videoscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video = DB::table('video')->select('video.id','video.name','video.url_image','video.url_video','video.description');
        $video = $video->get();

        return view('/admin/QLVD/quanlyvideo', compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/QLVD/themvideo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = new Video;
        $video->name = $request->name;
        $video->description = $request->description;
        $video->url_video= $request->url_video;
        $video->url_image= $request->url_image;
        $video->course_id = 1;
       
        $video->save();
        return redirect()->action('videosController@index');
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
        $video = video::findOrFail($id);
        
        return view('admin/QLVD/suavideo', compact('video'));
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
        $video = video::find($id);
        $video->name = $request->name;
        $video->url_image = $request->url_image;
        
        $video->description = $request->description;

        $video->save();
        return redirect()->action('videosController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = video::findOrFail($id);

        $video->delete();
        return redirect()->action('videosController@index');
    }
}
