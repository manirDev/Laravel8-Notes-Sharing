@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
    $tags = \App\Http\Controllers\HomeController::gettags();
@endphp


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="">
    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/fhome/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fhome/css/bootstrap..min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fhome/css/boxicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fhome/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fhome/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fhome/css/odometer.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fhome/css/meanmenu.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fhome/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fhome/css/nice-select.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fhome/css/viewer.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fhome/css/slick.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fhome/css/magnific-popup.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fhome/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fhome/css/responsive.css">
{{--    <title>Raque - Education & Online Courses HTML Template</title>--}}
    <link rel="icon" type="image/png" href="{{asset('assets')}}/fhomeassets/img/favicon.png">

    @yield('csz')
</head>
<body >

    <div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>

    <!-- Header--->

    <header class="header-area ">
        <div class="top-header top-header-style-four">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-9">
                        <div class="top-header-social">
                            <span>Soru, Ders Notu Talep - İstek</span>
                        </div>
                        <div class="top-header-social">
                            <span>Üniversiteli Efsaneleri</span>
                        </div>
                        <div class="top-header-social">
                            <span>Sınav Haftası Şarkıları</span>
                        </div>

                        <div class="top-header-social">
                            <span></span>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3">
                        <ul class="top-header-login-register">
                            <div class="top-header-social" style="border: none;">

                                @if($setting->twitter!=null)<a href="{{$setting->twitter}}"  target="_blank"><i class='bx bxl-facebook'></i></a>@endif
                                @if($setting->facebook!=null)<a href="{{$setting->facebook}}" target="_blank"><i class='bx bxl-twitter'></i></a>@endif
                                @if($setting->youtube!=null) <a href="{{$setting->facebook}}" target="_blank"><i class='bx bxl-linkedin'></i></a>@endif
                                @if($setting->instagram!=null) <a href="{{$setting->instagram}}" target="_blank"><i class='bx bxl-instagram'></i></a>@endif


                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        @include('home._menu')

    </header>

    <!-- Search overlay--->
    @include('home.overlay_search')



    <!-- Hero-->
    @yield('hero')

        <!-- Banner-->
    @yield('banner')

        <!--content-->
    @yield('content')

    @include('home._footer')
    @yield('livewire')

    <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>
    <!-- Include Libs & Plugins
    ============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{asset('assets')}}/fhome/js/jquery-2.2.4.min.js"></script>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/jquery.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/popper.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/owl.carousel.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/mixitup.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/parallax.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/jquery.appear.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/odometer.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/particles.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/meanmenu.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/jquery.nice-select.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/viewer.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/slick.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/form-validator.min.js"></script>
    <script src="{{asset('assets')}}/fhome/js/contact-form-script.js"></script>
    <script src="{{asset('assets')}}/fhome/js/main.js"></script>

@yield('jsz')

</body>
</html>
