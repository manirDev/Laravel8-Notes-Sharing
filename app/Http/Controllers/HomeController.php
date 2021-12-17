<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categoryList(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }
    public static function getSetting(){
        return $setting = Setting::first();
    }
    //
    public function test($s1, $s2){
        return $s1 + $s2;
    }
    public function index(){
        $setting = Setting::first();
        return view('home.index', ['setting' => $setting]);
    }

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
