@extends('layouts.home')

@section('title','About Us-' .$setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords', $setting->keywords)

@section('hero')

    <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}' style="background-image:url({{ Storage::url($setting->hero_images) }});">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>About Us</li>
                </ul>
                <h2>About Us</h2>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
{{--                <div class="col-lg-6 col-md-12">--}}
{{--                    <div class="about-image">--}}
{{--                        <img src="{{asset('assets')}}/fhome/img/about/1.jpg" class="shadow" alt="image">--}}
{{--                        <img src="{{asset('assets')}}/fhome/img/about/2.jpg" class="shadow" alt="image">--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-lg-12 col-md-12">
                    <div class="about-content">
                        <span class="sub-title">About Us</span>

                        {!! $setting->aboutus !!}

                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
