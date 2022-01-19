@php
 $settings = \App\Http\Controllers\Admin\HomeController::settings();
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>@yield('title')</title>

    <!--favicon-->
    <link rel="icon" href="{{asset('assets')}}/Ahome/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{asset('assets')}}/Ahome/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/Ahome/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <link href="{{asset('assets')}}/Ahome/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/Ahome/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/Ahome/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/Ahome/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('assets')}}/Ahome/css/pace.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="{{asset('assets')}}/Ahome/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/Ahome/css/bootstrap-extended.css" rel="stylesheet">
    <link href="{{asset('assets')}}/Ahome/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{asset('assets')}}/Ahome/css/app.css" rel="stylesheet">
    <link href="{{asset('assets')}}/Ahome/css/icons.css" rel="stylesheet">

    @yield('cssx')
    @yield('jsx')
</head>

<body class="bg-theme bg-theme1">

<!-- Start wrapper-->
<div class="wrapper">

    <!--Start sidebar-wrapper-->
            @include('admin.sidebar')
    <!--End sidebar-wrapper-->
    <!--start header -->
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand">
                    @include('admin.top_bar')
            </nav>
        </div>
    </header>
    <!--end header -->


    <div class="page-wrapper">
        <div class="page-content">

            @yield('content')

        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer mt-md-330" style="margin-top: 60vh">
        <p class="mt-md-330">Copyright © 2021. All right reserved.</p>
    </footer>
</div>

<!--end wrapper-->
<!--start switcher-->
<div class="switcher-wrapper">
    <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
    </div>
    <div class="switcher-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
            <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
        </div>
        <hr/>
        <p class="mb-0">Gaussian Texture</p>
        <hr>

        <ul class="switcher">
            <li id="theme1"></li>
            <li id="theme2"></li>
            <li id="theme3"></li>
            <li id="theme4"></li>
            <li id="theme5"></li>
            <li id="theme6"></li>
        </ul>
        <hr>
        <p class="mb-0">Gradient Background</p>
        <hr>

        <ul class="switcher">
            <li id="theme7"></li>
            <li id="theme8"></li>
            <li id="theme9"></li>
            <li id="theme10"></li>
            <li id="theme11"></li>
            <li id="theme12"></li>
            <li id="theme13"></li>
            <li id="theme14"></li>
            <li id="theme15"></li>
        </ul>
    </div>
</div>
<!--end switcher-->


<!-- Bootstrap JS -->
<script src="{{asset('assets')}}/Ahome/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset('assets')}}/Ahome/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/Ahome/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset('assets')}}/Ahome/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{asset('assets')}}/Ahome/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{asset('assets')}}/Ahome/plugins/chartjs/js/Chart.min.js"></script>
<script src="{{asset('assets')}}/Ahome/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{asset('assets')}}/Ahome/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('assets')}}/Ahome/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="{{asset('assets')}}/Ahome/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
<script src="{{asset('assets')}}/Ahome/plugins/jquery-knob/excanvas.js"></script>
<script src="{{asset('assets')}}/Ahome/plugins/jquery-knob/jquery.knob.js"></script>
<script src="{{asset('assets')}}/Ahome/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}/Ahome/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(function() {
        $(".knob").knob();
    });
</script>
<script src="{{asset('assets')}}/Ahome/js/index.js"></script>
<!--app JS-->
<script src="{{asset('assets')}}/Ahome/js/app.js"></script>

<script src="{{asset('assets')}}/Ahome/js/pace.min.js"></script>
<script src="{{asset('assets')}}/Ahome/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>



@yield('jsz')
</body>
</html>
