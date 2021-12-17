<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget mb-30">
                    <h3>Contact Us</h3>
                    <ul class="contact-us-link">
                        <li>
                            <i class='bx bx-map'></i>
                            <a href="#" target="_blank">{{$setting->address}}</a>
                        </li>
                        <li>
                            <i class='bx bx-phone-call'></i>
                            <a href="#">{{$setting->phone}}</a>
                        </li>
                        <li>
                            <i class='bx bx-envelope'></i>
                            <a href="#"><span class="__cf_email__" data-cfemail="84ece1e8e8ebc4f6e5f5f1e1aae7ebe9">{{$setting->email}}</span></a>
                        </li>
                    </ul>
                    <ul class="social-link">
                        <li>  @if($setting->twitter!=null)<a href="{{$setting->twitter}}" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a>@endif</li>
                        <li>@if($setting->twitter!=null)<a href="{{$setting->twitter}}"  class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a>@endif</li>
                        <li> @if($setting->facebook!=null)<a href="{{$setting->facebook}}"  class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a>@endif</li>
                        <li>@if($setting->youtube!=null) <a href="{{$setting->facebook}}"  class="d-block" target="_blank"><i class='bx bxl-linkedin'></i></a>@endif</li>
                        <li>@if($setting->instagram!=null) <a href="{{$setting->instagram}}"  class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a>@endif</li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget mb-30">
                    <h3>Support</h3>
                    <ul class="support-link">
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Condition</a></li>
                        <li><a href="#">Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget mb-30">
                    <h3>Useful Link</h3>
                    <ul class="useful-link">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">WP Development</a></li>
                        <li><a href="#">App</a></li>
                        <li><a href="#">Whitepaper</a></li>
                        <li><a href="#">Web Development</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget mb-30">
                    <h3>Newsletter</h3>
                    <div class="newsletter-box">
                        <p>To get the latest news and latest updates from us.</p>
                        <form class="newsletter-form" data-bs-toggle="validator">
                            <label>Your e-mail address:</label>
                            <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                            <button type="submit">Subscribe</button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="logo">
                <a href="index-5.html" class="d-inline-block"><img src="{{asset('assets')}}/fhome/img/logo.png" alt="image"></a>
            </div>
            <p><i class='bx bx-copyright'></i>2021 <a href="index-5.html" target="_blank">Raque</a> Designed By <a href="/" target="_blank">{{$setting->title}}</a> | All rights reserved.</p>
        </div>
    </div>
</footer>
