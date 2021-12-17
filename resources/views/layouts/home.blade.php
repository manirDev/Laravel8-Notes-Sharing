{{--@php--}}
{{--    $setting = \App\Http\Controllers\HomeController::getSetting()--}}
{{--@endphp--}}


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
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <ul class="top-header-contact-info">
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <span>Contact support</span>
                                <a href="tel:502464674">+502 464 674</a>
                            </li>
                            <li>
                                <i class='bx bx-map'></i>
                                <span>Our location</span>
                                <a href="#">New York, USA</a>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <span>Contact email</span>
                                <a href="/cdn-cgi/l/email-protection#741c1118181b3406150501115a171b19"><span class="__cf_email__" data-cfemail="2e464b4242416e5c4f5f5b4b004d4143">[email&#160;protected]</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="top-header-btn">
                            <a href="login.html" class="default-btn"><i class='bx bx-log-in icon-arrow before'></i><span class="label">Log In</span><i class="bx bx-log-in icon-arrow after"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('home._menu')

    </header>

    <!-- Search overlay--->
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class='bx bx-search-alt'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Hero-->
    @yield('hero')

        <!-- Banner-->
    @include('home._banner')

        <!--content-->
    @yield('content')

    @include('home._footer')

    <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>
    <!-- Include Libs & Plugins
    ============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{asset('assets')}}/fhome/js/jquery-2.2.4.min.js"></script>

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
</body>
</html>
