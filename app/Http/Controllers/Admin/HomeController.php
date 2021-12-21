<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin'); #same prevention with route method
    }

    public function index(){
        return view('admin.index');
    }
}
