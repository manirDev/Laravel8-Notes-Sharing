<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>@yield('title')</title>
    <!-- loader-->
    <link href="{{asset('assets')}}/css/pace.min.css" rel="stylesheet"/>
    <script src="{{asset('assets')}}/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="{{asset('assets')}}/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="{{asset('assets')}}/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <!-- simplebar CSS-->
    <link href="{{asset('assets')}}/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{asset('assets')}}/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{asset('assets')}}/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{asset('assets')}}/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{asset('assets')}}/css/app-style.css" rel="stylesheet"/>

</head>

<body class="bg-theme bg-theme1">
<!-- Start wrapper-->
<div id="wrapper">

    <!--Start sidebar-wrapper-->
    @include('admin.sidebar')
    <!--End sidebar-wrapper-->
    <!--Start topbar header-->
    <header class="topbar-nav">
        <nav class="navbar navbar-expand fixed-top">
            <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link toggle-menu" href="">
                        <i class="icon-menu menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <form class="search-bar">
                        <input type="text" class="form-control" placeholder="Enter keywords">
                        <a href=""><i class="icon-magnifier"></i></a>
                    </form>
                </li>
            </ul>

            <ul class="navbar-nav align-items-center right-nav-link">
                <li class="nav-item dropdown-lg">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="">
                        <i class="fa fa-envelope-open-o"></i></a>
                </li>
                <li class="nav-item dropdown-lg">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="">
                        <i class="fa fa-bell-o"></i></a>
                </li>
                <li class="nav-item language">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href=""><i class="fa fa-flag"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                        <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                        <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                        <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item user-details">
                            <a href="">
                                <div class="media">
                                    <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                    <div class="media-body">
                                        <h6 class="mt-2 user-title">
                                            @auth
                                                <a href="#" class="d-block">{{Auth::user()->name}}</a>

                                            @endauth
                                        </h6>
                                        <p class="user-subtitle">
                                            @auth
                                                <a href="#" class="d-block">{{Auth::user()->email}}</a>

                                            @endauth
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">

                            @auth
                                <a href="{{route('admin_logout')}}" class="d-block"><i class="icon-power mr-2"></i>Logout</a>
                            @endauth
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!--End topbar header-->
    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">

            @yield('content')

        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->

    <!--Start footer-->
    <footer class="footer" style="position: fixed; bottom: 0px">
        <div class="container">
            <div class="text-center">
                Copyright © 2018 Dashtreme Admin
            </div>
        </div>
    </footer>
    <!--End footer-->

    <!--start color switcher-->
    <div class="right-sidebar">
        <div class="switcher-icon">
            <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
        </div>
        <div class="right-sidebar-content">

            <p class="mb-0">Gaussion Texture</p>
            <hr>

            <ul class="switcher">
                <li id="theme1"></li>
                <li id="theme2"></li>
                <li id="theme3"></li>
                <li id="theme4"></li>
                <li id="theme5"></li>
                <li id="theme6"></li>
            </ul>

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
    <!--end color switcher-->


</div><!--End wrapper-->

<!-- Bootstrap core JavaScript-->
<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/js/popper.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="{{asset('assets')}}/plugins/simplebar/js/simplebar.js"></script>
<!-- sidebar-menu js -->
<script src="{{asset('assets')}}/js/sidebar-menu.js"></script>
<!-- loader scripts -->
<script src="{{asset('assets')}}/js/jquery.loading-indicator.js"></script>
<!-- Custom scripts -->
<script src="{{asset('assets')}}/js/app-script.js"></script>
<!-- Chart js -->

<script src="{{asset('assets')}}/plugins/Chart.js/Chart.min.js"></script>

<!-- Index js -->
<script src="{{asset('assets')}}/js/index.js"></script>


</body>
</html>
