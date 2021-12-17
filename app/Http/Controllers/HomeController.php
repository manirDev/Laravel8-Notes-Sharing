<?php

namespace App\Http\Controllers;

use App\Models\Message;
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
    //

    public function index(){
        $setting = Setting::first();
        return view('home.index', ['setting' => $setting]);
    }
//Pages start
    public function aboutus(){
        return   view('home.aboutus');

    }
    public function references(){
        return  view('home.aboutus');

    }
    public function faq(){
        return  view('home.aboutus');

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
