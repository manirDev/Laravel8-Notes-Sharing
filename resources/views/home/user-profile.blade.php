@extends('layouts.home')

@section('title', 'User-Dashboard')

@section('hero')

    <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}' style="background-image:url({{asset('assets')}}/fhome/img/main-banner3.jpg);">
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

@section('slider')
    @include('home._slider')
@endsection

@section('content')


        <section class="my-account-area ptb-100 d-flex justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="myAccount-navigation col-2">
                        @include('home.user-header')
                    </div>
                    <div class="col-10">
                        @include('profile.show')
                    </div>
                </div>
            </div>
        </section>


@endsection
