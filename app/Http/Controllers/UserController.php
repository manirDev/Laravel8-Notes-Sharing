<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Review;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        return view('home.user', ['setting'=>$setting]);
    }

    public function userProfile()
    {
        $setting = Setting::first();
        return view('home.user-profile', ['setting'=>$setting]);
    }

    public function myreviews(){
        $setting = Setting::first();
        $datalist = Review::where('user_id', '=', Auth::user()->id)->get();
//        $tags = Content::select('id', 'title', 'image', 'description', 'slug')->limit(5)->inRandomOrder()->get();
        return view('home.user_reviews', ['datalist' => $datalist,'setting'=>$setting]);
    }
    public function destroyreview(Review $review, $id){
        $data = Review::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Review Deleted');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
