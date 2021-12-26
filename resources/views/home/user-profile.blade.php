
@extends('layouts.home')

@section('title', 'User-Not-Content')


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



@section('content')


    <section class="my-account-area ptb-100">
        <div class="container">
            <div class="row">

                <div class="myAccount-navigation col-2">
                    @include('home.user-header')
                </div>

                <div class="myAccount-content col-lg-10">
                    <div class="recent-orders-table table-responsive">
                        @include('profile.show')
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('jsz')
    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/fhome/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fhome/css/bootstrap..min.css">


    <link rel="stylesheet" href="{{asset('assets')}}/fhome/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fhome/css/responsive.css">

   ============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{asset('assets')}}/fhome/js/jquery-2.2.4.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/jquery.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/popper.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/bootstrap.min.js"></script>

    <script src="{{asset('assets')}}/fhome/js/main.js"></script>

@endsection
