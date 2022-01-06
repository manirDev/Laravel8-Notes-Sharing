@extends('layouts.home')

@section('title','User-Panel-' .$setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords', $setting->keywords)

@section('hero')

    <div class="page-title-area jarallax" data-jarallax='{"speed": 0.3}' style="background-image:url({{asset('assets')}}/fhome/img/main-banner3.jpg);max-height: 50px">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>My Account</li>
                </ul>
                <h2>My Account</h2>
            </div>
        </div>
    </div>

@endsection



@section('content')

    @include('home.user-content')

@endsection
