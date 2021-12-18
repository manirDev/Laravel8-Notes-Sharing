@extends('layouts.home')

@section('title','Contact-')



@section('hero')

    <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}' style="background-image:url({{asset('assets')}}/fhome/img/main-banner3.jpg);">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Contact</li>
                </ul>
                <h2>Contact</h2>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <section class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class='bx bx-envelope'></i>
                        </div>
                        <h3>Email Here</h3>
                        <p><a href="#"><span class="__cf_email__" >[email&#160;protected]</span></a></p>
                        <p><a href="#"><span class="__cf_email__" >[email&#160;protected]</span></a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class='bx bx-map'></i>
                        </div>
                        <h3>Location Here</h3>
                        <p><a href="https://goo.gl/maps/Mii9keyeqXeNH4347" target="_blank">2750 Quadra Street Victoria Road, New York, USA</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                    <div class="contact-info-box mb-30">
                        <div class="icon">
                            <i class='bx bx-phone-call'></i>
                        </div>
                        <h3>Call Here</h3>
                        <p><a href="tel:1234567890">+123 456 7890</a></p>
                        <p><a href="tel:2414524526">+241 452 4526</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-js-circle-bubble-2"></div>
    </section>


    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Contact Us</span>
                <h2>Drop us Message for any Query</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="contact-form" >
                <p>@include('home.flash-message')</p>
                <form action="{{route('send-message')}}" role="form"  method="Post" style="padding: 10px;">
                    @csrf
                    <div class="row pt-1">
                        <div class="col-lg-6 col-md-12 ">
                            <div class="form-group pt-4">
                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group pt-4">
                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 pt-4">
                            <div class="form-group">
                                <input type="text" name="phone" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 pt-4">
                            <div class="form-group">
                                <input type="text" name="subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 pt-4">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 pt-4">
                            <button type="submit" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Send Message</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="particles-js-circle-bubble-3"></div>
        <div class="contact-bg-image"><img src="assets/img/map.png" alt="image"></div>
    </section>

@endsection
