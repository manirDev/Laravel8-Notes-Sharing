
<section class="my-account-area ptb-100">
    <div class="container">
        <div class="row">

            <div class="myAccount-navigation col-lg-2 col-md-4">
                @include('home.user-header')
            </div>
            <div class="myAccount-content col-10">
                <section class="my-account-area ">
                    <div class="container">
                        <div class="myAccount-profile">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-5">
                                    <div class="profile-image">
                                        @if(Auth::user()->profile_photo_path)
                                            <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" alt="image" >
                                        @else
                                            <img src="{{asset('assets')}}/fhome/img/nulo.jpg" alt="image" >
                                        @endif
                                    </div>
                                </div>
                                @auth
                                    <div class="col-lg-8 col-md-8">
                                        <div class="profile-content">
                                            <h3>{{Auth::user()->name}}</h3>
                                            <ul class="contact-info">
                                                <li><i class='bx bx-envelope'></i> <a href="#"><span class="__cf_email__" >{{Auth::user()->email}}</span></a></li>
                                                <li><i class='bx bx-phone'></i> <a href="#">{{Auth::user()->phone}}</a></li>
                                                <li><i class='bx bx-map'></i> <a href="#">{{Auth::user()->address}}</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
