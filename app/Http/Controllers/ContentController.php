<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$datalist = DB::select('select * from categories');
        //$datalist = DB::table('contents')->get();
        $setting = Setting::first();
        $datalist = Content::where('user_id', Auth::id())->get();
        //echo var_dump($datalist) ;
        $tags = Content::select('id', 'title', 'image', 'description', 'slug')->limit(5)->inRandomOrder()->get();
        return view('home.user_not-content', ['datalist' => $datalist, 'tags'=>$tags, 'setting'=>$setting]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $setting = Setting::first();
        // $datalist = Category::all();
//        $tags = Content::select('id', 'title', 'image', 'description', 'slug')->limit(5)->inRandomOrder()->get();
        $datalist = Category::with('children')->get();
        return view('home.user_not-content_add', ['datalist' => $datalist,'setting'=>$setting]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Content;
        //$data->parent_id = $request->input('parent_id');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->detail = $request->input('detail');
        $data->image = Storage::putFile('images', $request->file('image') );
        $data->file = Storage::putFile('files', $request->file('file') );
        $data->save();
        return redirect()->route('user_content');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */

    public function show(Content $content)
    {
        //
        if(Cookie::get($content->id)!=''){
            Cookie::set('$content->id', '1', 60);
            $content->incrementReadCount();
        }

        return view('home.index', compact($content));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Content $content, $id)
    {
        //
        $setting = Setting::first();

        $data = Content::find($id);
        //$datalist = Category::all();
        $datalist = Category::with('children')->get();
        return view('home.user_not-content_edit', ['data' => $data,'datalist'=>$datalist, 'setting'=>$setting]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content, $id)
    {
        //
        $data = Content::find($id);
        //$data->parent_id = $request->input('parent_id');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->detail = $request->input('detail');
        if($request->file('image')!=NULL){
            $data->image = Storage::putFile('images', $request->file('image'));
        }
        if($request->file('file')!=NULL){
            $data->file = Storage::putFile('files', $request->file('file') );
        }


        $data->save();
        return redirect()->route('user_content');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content, $id)
    {
        //
        DB::table('contents')->where('id', '=', $id)->delete();

        return redirect()->route('user_content');
    }
}
