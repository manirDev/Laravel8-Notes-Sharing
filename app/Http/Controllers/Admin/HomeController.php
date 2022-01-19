<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Review;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin'); #same prevention with route method
    }
    public static function settings(){
        return Setting::first();
    }
    public function index(){
        $setting = Setting::first();
        $noteCount = Content::count();
        $userCount = User::count();
        $reviewCount = Review::count();
        $readsCount = Content::count();
        return view('admin.index',['setting'=>$setting,'noteCount'=>$noteCount, 'userCount'=>$userCount, 'reviewCount'=>$reviewCount, 'readsCount'=>$readsCount]);
    }
}
