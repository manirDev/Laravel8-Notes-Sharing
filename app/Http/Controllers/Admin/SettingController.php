<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\isEmpty;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Setting::all();
        // print_r($data);
        if (isEmpty($data)){
            $data = new Setting();
            $data->title = 'Not-Paylasim Sitesi';
            $data->hero_title = 'THE FUTURE';
            $data->hero_subtitle = 'THE FUTURE';
            $data->hero_description = 'THE FUTURE';
            $data->save();
            $data = Setting::first();
        }

        return view('admin.setting_edit', ['data'=>$data]);
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
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //
        $id= $request->input('id');

        $data = Setting::find($id);

        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->company = $request->input('company');
        $data->address = $request->input('address');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->email = $request->input('email');
        $data->smtpserver = $request->input('smtpserver');
        $data->smtpemail = $request->input('smtpemail');
        $data->smtppassword = $request->input('smtppassword');
        $data->smtpport = $request->input('smtpport');
        $data->facebook = $request->input('facebook');
        $data->instagram = $request->input('instagram');
        $data->twitter = $request->input('twitter');
        $data->youtube = $request->input('youtube');
        $data->aboutus = $request->input('aboutus');
        $data->contact = $request->input('contact');
        $data->references = $request->input('references');
        $data->status = $request->input('status');
        $data->hero_title = $request->input('hero_title');
        $data->hero_subtitle = $request->input('hero_subtitle');
        $data->hero_description = $request->input('hero_description');
        if($request->file('image')!=NULL){
            $data->hero_images = Storage::putFile('images', $request->file('image'));
        }
        $data->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
