<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Review;
use App\Models\Setting;
use App\Models\Category;
use App\Models\User;
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
        return Review::where('content_id', $id)->average('rate');
    }
    //most viewed
    public static function mostViewed(){
        return Content::OrderBy('reads', 'DESC')->take(3)->get();
    }
    public static function avgmax($id)
    {
         $avg = Review::where('content_id', $id)->average('rate');
         $max= Review::where('content_id', $id)->max('rate');
        $list = Review::all();
        $lineCount = count($list);;
        $arr = array();
        for($i=0;$i<=$lineCount;$i++){
            $arr[] = $avg;
        }

        $third = $first = $second = 0;
        for ($i = 0; $i < count($arr) ; $i++)
        {
            /* If current element is greater than first*/
            if ($arr[$i] > $first)
            {
                $third = $second;
                $second = $first;
                $first = $arr[$i];
            }

            /* If arr[i] is in between first and second then update second  */
            else if ($arr[$i] > $second)
            {
                $third = $second;
                $second = $arr[$i];
            }

            else if ($arr[$i] > $third)
                $third = $arr[$i];
        }
        $arrfinal = array($third,$second,$first);
        return $arrfinal;
    }
    public static function gettags(){
        return  Content::select('id', 'title', 'image', 'description', 'slug')->limit(6)->get();
    }
//    public static function tagcount(){
//        return  Content::select('slug')->limit(6)->get();
//    }


    public function notContent(Request $request, $id,  $slug){
        Content::find($id)->increment('reads');
        $setting = Setting::first();
        $data = Content::find($id);
//        $tags = Content::select('id', 'title', 'image', 'description', 'slug')->limit(5)->inRandomOrder()->get();
        $datalist = Content::where('category_id',$id)->where('status','True')->get();
        $reviews = Review::where('content_id', $id)->paginate(3);
        $picked = Content::select('id','category_id', 'title', 'image', 'description', 'slug', 'created_at','user_id')->where('status','True')->get();
        return view('home.not-content_detail', ['data' => $data,'datalist' => $datalist, 'reviews'=>$reviews, 'picked'=>$picked, 'setting'=>$setting]);
    }
    public function getcontent(Request $request){
        if($request->input('search')){ $search =$request->input('search');}

        $count = Content::where('title', 'like', '%'.$search.'%')->get()->count();
        if($count==1)
        {
            $data = Content::where('title', 'like', '%'.$search.'%')->first();
            return redirect()->route('notContent', ['id' => $data->id,'slug' => $data->slug]);
        }
        else
        {
            return redirect()->route('contentlist', ['search' => $search]);
        }
    }
    public function contentlist($search){

        $datalist = Content::where('title', 'like', '%'.$search.'%')->get();
        return view('home.search_contents', ['search' => $search, 'datalist' => $datalist]);

    }
    public function allnotes(){
        $setting = Setting::first();
        $datalist = Content::inRandomOrder('1234')->paginate(6);
//        $tags = Content::select('id', 'title', 'image', 'description', 'slug')->limit(5)->inRandomOrder()->get();
        $rand = Content::select('id','category_id', 'title', 'image', 'description', 'slug','created_at','user_id')->where('status','True')->limit(8)->inRandomOrder()->get();
        return view('home.all_notes', ['datalist' => $datalist,'rand'=>$rand, 'setting'=>$setting]);

    }
    public function allcategories(){
        $setting = Setting::first();
        $datalist = Category::inRandomOrder()->paginate(8);
        //$rand = Content::select('id','category_id', 'title', 'image', 'description', 'slug','created_at','user_id')->where('status','True')->limit(8)->inRandomOrder()->get();
        return view('home.all_categories', ['datalist' => $datalist, 'setting'=>$setting]);

    }
    public function categorycontents($id, $slug){
        $setting = Setting::first();
        $datalist = Content::where('category_id',$id)->where('status','True')->inRandomOrder('1234')->paginate(6);
        $data = Category::find($id);
//        print_r($data);
//        exit();
//        $tags = Content::select('id', 'title', 'image', 'description', 'slug')->limit(5)->inRandomOrder()->get();
        $rand = Content::select('id','category_id', 'title', 'image', 'description', 'slug','created_at','user_id')->where('status','True')->limit(8)->inRandomOrder()->get();
        return view('home.category_content', ['data' => $data, 'datalist' => $datalist,'rand'=>$rand,'setting'=>$setting]);
    }


    public function index(){
//        $tags = Content::select('id', 'title', 'image', 'description', 'slug')->limit(5)->inRandomOrder()->get();
        $setting = Setting::first();
        $slider = Content::select('id', 'title', 'image', 'description', 'slug')->limit(4)->get();
        $daily = Content::select('id','title', 'image', 'description', 'slug','user_id','reads')->where('status','True')->latest()->limit(6)->get();
//        echo($daily);
//        exit();
        $last = Content::select('id', 'title', 'image', 'description', 'slug')->limit(6)->inRandomOrder()->get();
        $picked = Content::select('id', 'title', 'image', 'description', 'slug','user_id','reads')->where('status','True')->limit(6)->inRandomOrder()->get();
//        print_r($picked);
//        exit();
        $noteCount = Content::count();
        $userCount = User::count();

        $reviewCount = Review::count();
        $readCount = Content::sum('reads');
        //$noteCount = Content::where('id',)->count();
//        echo $noteCount;
//        exit();
        $categories = Category::select('id', 'title', 'image', 'description')->where('id','>',0)->limit(6)->inRandomOrder()->get();
        $data = [
            'setting'=>$setting,
            'slider' => $slider,
            'daily'=>$daily,
            'last'=>$last,
            'picked'=>$picked,
            'noteCount'=>$noteCount,
            'userCount'=>$userCount,
            'reviewCount'=>$reviewCount,
            'readCount'=>$readCount,
            'categories'=>$categories
        ];
        return view('home.index', $data);
    }
//Pages start
    public function aboutus(){
        $setting = Setting::first();
//        $tags = Content::select('id', 'title', 'image', 'description', 'slug')->limit(5)->inRandomOrder()->get();
        return  view('home.aboutus',  ['setting'=>$setting]);

    }
    public function references(){
        $setting = Setting::first();
//        $tags = Content::select('id', 'title', 'image', 'description', 'slug')->limit(5)->inRandomOrder()->get();
        return  view('home.references',  ['setting'=>$setting]);

    }
    public function faq(){
        $setting = Setting::first();
        $tags = Content::select('id', 'title', 'image', 'description', 'slug')->limit(5)->inRandomOrder()->get();
        $datalist = Faq::all()->sortBy('position');
        return view('home.faq', ['datalist' => $datalist,'tags'=>$tags,'setting'=>$setting]);

    }
    public function contact(){
        $setting = Setting::first();
//        $tags = Content::select('id', 'title', 'image', 'description', 'slug')->limit(5)->inRandomOrder()->get();
        return  view('home.contact', ['setting'=>$setting]);
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
