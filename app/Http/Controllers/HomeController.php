<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home.index');
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
