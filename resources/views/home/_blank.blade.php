
<section class="my-account-area ptb-100">
    <div class="container">
        <div class="myAccount-profile">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-5">
                    <div class="profile-image">
                        <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" alt="image">
                    </div>
                </div>
                @auth
                <div class="col-lg-8 col-md-7">
                    <div class="profile-content">
                        <h3>{{Auth::user()->name}}</h3>
                        <ul class="contact-info">
                            <li><i class='bx bx-envelope'></i> <a href="#"><span class="__cf_email__" data-cfemail="28404d444447684249454d5b49464c4d5a5b4746064b4745">[email&#160;protected]</span></a></li>
                            <li><i class='bx bx-phone'></i> <a href="#">{{Auth::user()->phone}}</a></li>
                            <li><i class='bx bx-world'></i> <a href="#" target="_blank">{{Auth::user()->email}}</a></li>
                        </ul>
                        <ul class="social">
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-pinterest-alt'></i></a></li>
                        </ul>
                        <a href="#" class="myAccount-logout">Logout</a>
                    </div>
                </div>
                @endauth
            </div>
        </div>
    </div>
</section>
