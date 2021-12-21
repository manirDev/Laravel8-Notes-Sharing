<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($content_id)
    {
        //
        $data = Content::find($content_id);
        $images = DB::table('images')->where('content_id', '=', $content_id)->get();

        return view('admin.image_add', ['data' => $data, 'images'=>$images]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $content_id)
    {
        //
        $data = new Image;
        //$data->parent_id = $request->input('parent_id');
        $data->content_id = $content_id;
        $data->title = $request->input('title');
        $data->image = Storage::putFile('images', $request->file('image') );

        $data->save();
        return redirect()->route('admin_image_add', ['content_id'=>$content_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image, $id, $content_id)
    {
        //
        $data = Image::find($id);
        $data->delete();

        return redirect()->route('admin_image_add', ['content_id'=>$content_id]);
    }
}
