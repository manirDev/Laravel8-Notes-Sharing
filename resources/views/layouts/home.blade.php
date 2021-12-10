<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
    <link href="{{asset('assets')}}/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!--[if IE 7]>
    <link href="{{asset('assets')}}/css/font-awesome-ie7.min.css" rel="stylesheet">
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets')}}/ico/favicon.ico">
</head>
<body>
<!--
	Upper Header Section
-->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="topNav">
        <div class="container">
            <div class="alignR">
                <div class="pull-left socialNw">
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-youtube"></span></a>
                    <a href="#"><span class="icon-tumblr"></span></a>
                </div>
                <a class="active" href="index.html"> <span class="icon-home"></span> Home</a>
                <a href="#"><span class="icon-user"></span> My Account</a>
                <a href="register.html"><span class="icon-edit"></span> Free Register </a>
                <a href="contact.html"><span class="icon-envelope"></span> Contact us</a>
                <a href="cart.html"><span class="icon-shopping-cart"></span> 2 Item(s) - <span class="badge badge-warning"> $448.42</span></a>
            </div>
        </div>
    </div>
</div>

<!--
Lower Header Section
-->
<div class="container">
    <div id="gototop"> </div>
    <header id="header">
        <div class="row">
            <div class="span4">
                <h1>
                    <a class="logo" href="index.html"><span>Twitter Bootstrap ecommerce template</span>
                        <img src="{{asset('assets')}}/img/logo-bootstrap-shoping-cart.png" alt="bootstrap sexy shop">
                    </a>
                </h1>
            </div>
            <div class="span4">
                <div class="offerNoteWrapper">
                    <h1 class="dotmark">
                        <i class="icon-cut"></i>
                        Twitter Bootstrap shopping cart HTML template is available @ $14
                    </h1>
                </div>
            </div>
            <div class="span4 alignR">
                <p><br> <strong> Support (24/7) :  0800 1234 678 </strong><br><br></p>
                <span class="btn btn-mini">[ 2 ] <span class="icon-shopping-cart"></span></span>
                <span class="btn btn-warning btn-mini">$</span>
                <span class="btn btn-mini">&pound;</span>
                <span class="btn btn-mini">&euro;</span>
            </div>
        </div>
    </header>

    <!--
    Navigation Bar Section
    -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="nav-collapse">
                    <ul class="nav">
                        <li class="active"><a href="index.html">Home	</a></li>
                        <li class=""><a href="list-view.html">List View</a></li>
                        <li class=""><a href="grid-view.html">Grid View</a></li>
                        <li class=""><a href="three-col.html">Three Column</a></li>
                        <li class=""><a href="four-col.html">Four Column</a></li>
                        <li class=""><a href="general.html">General Content</a></li>
                    </ul>
                    <form action="#" class="navbar-search pull-left">
                        <input type="text" placeholder="Search" class="search-query span2">
                    </form>
                    <ul class="nav pull-right">
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
                            <div class="dropdown-menu">
                                <form class="form-horizontal loginFrm">
                                    <div class="control-group">
                                        <input type="text" class="span2" id="inputEmail" placeholder="Email">
                                    </div>
                                    <div class="control-group">
                                        <input type="password" class="span2" id="inputPassword" placeholder="Password">
                                    </div>
                                    <div class="control-group">
                                        <label class="checkbox">
                                            <input type="checkbox"> Remember me
                                        </label>
                                        <button type="submit" class="shopBtn btn-block">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--
    Body Section
    -->
    <div class="row">
       <!---
        sideBar
       --->
        @yield('sidebar')
        <div class="span9">
            <!--
            slider
            -->
        @yield('slider')
            <!--
            New Products
            -->
           <--
            content
            -->
        @yield('content')
            <!--
            Featured Products
            -->
            <div class="well well-small">
                <h3><a class="btn btn-mini pull-right" href="products.html" title="View more">VIew More<span class="icon-plus"></span></a> Featured Products  </h3>
                <hr class="soften"/>
                <div class="row-fluid">
                    <ul class="thumbnails">
                        <li class="span4">
                            <div class="thumbnail">
                                <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                                <a  href="product_details.html"><img src="assets/img/d.jpg" alt=""></a>
                                <div class="caption">
                                    <h5>Manicure & Pedicure</h5>
                                    <h4>
                                        <a class="defaultBtn" href="product_details.html" title="Click to view"><span class="icon-zoom-in"></span></a>
                                        <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
                                        <span class="pull-right">$22.00</span>
                                    </h4>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                                <a  href="product_details.html"><img src="assets/img/e.jpg" alt=""></a>
                                <div class="caption">
                                    <h5>Manicure & Pedicure</h5>
                                    <h4>
                                        <a class="defaultBtn" href="product_details.html" title="Click to view"><span class="icon-zoom-in"></span></a>
                                        <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
                                        <span class="pull-right">$22.00</span>
                                    </h4>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                                <a  href="product_details.html"><img src="assets/img/f.jpg" alt=""/></a>
                                <div class="caption">
                                    <h5>Manicure & Pedicure</h5>
                                    <h4>
                                        <a class="defaultBtn" href="product_details.html" title="Click to view"><span class="icon-zoom-in"></span></a>
                                        <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
                                        <span class="pull-right">$22.00</span>
                                    </h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="well well-small">
                <a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a>
                Popular Products
            </div>
            <hr>
            <div class="well well-small">
                <a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a>
                Best selling Products
            </div>
        </div>
    </div>
    <!--
    Clients
    -->
    <section class="our_client">
        <hr class="soften"/>
        <h4 class="title cntr"><span class="text">Manufactures</span></h4>
        <hr class="soften"/>
        <div class="row">
            <div class="span2">
                <a href="#"><img alt="" src="assets/img/1.png"></a>
            </div>
            <div class="span2">
                <a href="#"><img alt="" src="assets/img/2.png"></a>
            </div>
            <div class="span2">
                <a href="#"><img alt="" src="assets/img/3.png"></a>
            </div>
            <div class="span2">
                <a href="#"><img alt="" src="assets/img/4.png"></a>
            </div>
            <div class="span2">
                <a href="#"><img alt="" src="assets/img/5.png"></a>
            </div>
            <div class="span2">
                <a href="#"><img alt="" src="assets/img/6.png"></a>
            </div>
        </div>
    </section>

    <!--
    Footer
    -->
    <footer class="footer">
        <div class="row-fluid">
            <div class="span2">
                <h5>Your Account</h5>
                <a href="#">YOUR ACCOUNT</a><br>
                <a href="#">PERSONAL INFORMATION</a><br>
                <a href="#">ADDRESSES</a><br>
                <a href="#">DISCOUNT</a><br>
                <a href="#">ORDER HISTORY</a><br>
            </div>
            <div class="span2">
                <h5>Iinformation</h5>
                <a href="contact.html">CONTACT</a><br>
                <a href="#">SITEMAP</a><br>
                <a href="#">LEGAL NOTICE</a><br>
                <a href="#">TERMS AND CONDITIONS</a><br>
                <a href="#">ABOUT US</a><br>
            </div>
            <div class="span2">
                <h5>Our Offer</h5>
                <a href="#">NEW PRODUCTS</a> <br>
                <a href="#">TOP SELLERS</a><br>
                <a href="#">SPECIALS</a><br>
                <a href="#">MANUFACTURERS</a><br>
                <a href="#">SUPPLIERS</a> <br/>
            </div>
            <div class="span6">
                <h5>The standard chunk of Lorem</h5>
                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
                Malorum" by Cicero are also reproduced in their exact original form,
                accompanied by English versions from the 1914 translation by H. Rackham.
            </div>
        </div>
    </footer>
</div><!-- /container -->

<div class="copyright">
    <div class="container">
        <p class="pull-right">
            <a href="#"><img src="assets/img/maestro.png" alt="payment"></a>
            <a href="#"><img src="assets/img/mc.png" alt="payment"></a>
            <a href="#"><img src="assets/img/pp.png" alt="payment"></a>
            <a href="#"><img src="assets/img/visa.png" alt="payment"></a>
            <a href="#"><img src="assets/img/disc.png" alt="payment"></a>
        </p>
        <span>Copyright &copy; 2013<br> bootstrap ecommerce shopping template</span>
    </div>
</div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('assets')}}/js/jquery.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.easing-1.3.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script src="{{asset('assets')}}/js/shop.js"></script>
</body>
</html>
