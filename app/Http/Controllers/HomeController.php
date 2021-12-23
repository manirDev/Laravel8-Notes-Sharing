<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Review;
use App\Models\Setting;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    public static function categoryList(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }
    public static function getSetting(){
        return $setting = Setting::first();
    }
    public static function countreview($id)
    {
        return Review::where('content_id', $id)->count() ;
    }
    public static function avgreview($id)
    {
        return Review::where('content_id', $id)->average('rate') ;
    }

    //
    public function notContent($id, $slug){
        $data = Content::find($id);
        $datalist = Content::where('category_id',$id)->get();
        $reviews = Review::where('content_id', $id)->get();
//        print_r($reviews);
//        exit();
        return view('home.not-content_detail', ['data' => $data,'datalist' => $datalist, 'reviews'=>$reviews]);
    }
    public function categorycontents($id, $slug){
        $datalist = Content::where('category_id',$id)->get();
        $data = Category::find($id);
//        print_r($data);
//        exit();
        return view('home.category_content', ['data' => $data, 'datalist' => $datalist]);
    }


    public function index(){

        $setting = Setting::first();
        $slider = Content::select('id', 'title', 'image', 'description', 'slug')->limit(4)->get();
        $daily = Content::select('id','title', 'image', 'description', 'slug')->limit(6)->inRandomOrder()->get();
        $last = Content::select('id', 'title', 'image', 'description', 'slug')->limit(6)->inRandomOrder()->get();
        $picked = Content::select('id', 'title', 'image', 'description', 'slug')->limit(6)->inRandomOrder()->get();
//        print_r($picked);
//        exit();
        $data = [
            'setting'=>$setting,
            'slidee' => $slider,
            'daily'=>$daily,
            'last'=>$last,
            'picked'=>$picked
        ];
        return view('home.index', $data);
    }
//Pages start
    public function aboutus(){
        return   view('home.aboutus');

    }
    public function references(){
        return  view('home.aboutus');

    }
    public function faq(){
        $datalist = Faq::all()->sortBy('position');
        return view('home.faq', ['datalist' => $datalist]);

    }
    public function contact(){
        return  view('home.contact');
    }
    public function sendmessage(Request $request)
    {
        DB::table('messages')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message')
        ]);
//        $data = new Message();
//        $data->name = $request->input('name');
//        $data->email = $request->input('email');
//        $data->phone = $request->input('phone');
//        $data->subject = $request->input('subject');
//        $data->message = $request->input('message');
//
//        $data->save();

        return redirect()->route('contact')->with('success', 'Message successfully sent!');
    }

    //pages end
    public function login(){
        return view('admin.login');
    }

    public function check(Request $request){
        $method = $request->method();

        if($request->isMethod('post')){
            $credentials = $request->only('email', 'password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('admin')->withSuccess('Signed in');
            }
            return back()->withErrors([
                'email'=>'the provided credentials do not match our records.',
            ]);
        }
        else{
            return view('admin.login')->withSuccess('Login details are not valid');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
