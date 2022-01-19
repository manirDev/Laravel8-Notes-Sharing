<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    protected $appends = [
        'getParentsTree'
    ];
    public static function getParentsTree($category, $title){
        if($category->parent_id == 0){
            return $title;
        }
        $parent = Category::find($category->parent_id);
        $title = $parent->title . '>' . $title;

        return CategoryController::getParentsTree($parent, $title);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$datalist = DB::select('select * from categories');
        //$datalist = DB::table('categories')->get();
        $setting = Setting::first();
        $datalist = Category::with('children')->get();
        return view('admin.category', ['datalist' => $datalist, 'setting'=>$setting]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function add()
    {
        //
        //$datalist = DB::table('categories')->get()->where('parent_id', 0);
        //print_r($datalist);
        //exit();
        $setting = Setting::first();
        $datalist = Category::with('children')->get();
        return view('admin.category_add', ['datalist' => $datalist,'setting'=>$setting]);
    }
    public function create(Request $request)
    {

//        DB::table('categories')->insert([
//            'parent_id' => $request->input('parent_id'),
//            'title' => $request->input('title'),
//            'keywords' => $request->input('keywords'),
//            'description' => $request->input('description'),
//            'slug' => $request->input('slug'),
//            'status' => $request->input('status')
//        ]);
        $data = new Category;
        $data->parent_id = $request->input('parent_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->image = Storage::putFile('images', $request->file('image') );
        $data->save();
       return redirect()->route('admin_category');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
        //
        $setting = Setting::first();
        $data = Category::find($id);
        //$datalist = DB::table('categories')->get()->where('parent_id', 0);
        $datalist = Category::with('children')->get();
        return view('admin.category_edit', ['data' => $data,'datalist'=>$datalist,'setting'=>$setting]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, $id)
    {
        //
        $data = Category::find($id);

        $data->parent_id = $request->input('parent_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        if($request->file('image')!=NULL){
            $data->image = Storage::putFile('images', $request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {
        //
        DB::table('categories')->where('id', '=', $id)->delete();

        return redirect()->route('admin_category');
    }
}
