@section('livewire')
    @livewireScripts
@endsection

<div class="navbar-area">
    <div class="raque-responsive-nav">
        <div class="container">
            <div class="raque-responsive-menu">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset('assets')}}/fhome/img/black-logo.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="raque-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset('assets')}}/fhome/img/black-logo.png" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{route('home')}}" class="nav-link active">Home</a></li>
                        <!-- Category-->
                         @include('home._category')
                        <li class="nav-item"><a href="{{route('aboutus')}}" class="nav-link ">About Us </a></li>
                        <li class="nav-item"><a href="{{route('references')}}" class="nav-link ">References </a></li>
                        <li class="nav-item"><a href="{{route('faq')}}" class="nav-link ">FAQ's </a></li>
                        <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                    </ul>
                    <div class="others-option">
                        @auth
                        <div class="dropdown language-switcher d-inline-block">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class='bx bx-user'></i>
                                <span>{{Auth::user()->name}} <i class='bx bx-chevron-down'></i></span>
                            </button>
                            <div class="dropdown-menu">
                                <a href="{{route('myprofile')}}" class="dropdown-item d-flex align-items-center">
                                    <i class='bx bx-user'></i>
                                    <span>My account</span>
                                </a>
                                <a href="{{route('admin_logout')}}" class="dropdown-item d-flex align-items-center">
                                    <i class='bx bx-log-out'></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </div>
                        @endauth

                       @guest
                            <span style="border-right: 1px solid black;height: 5px; padding: 10px"><a href="{{route('login')}}"><i class='bx bx-log-in'></i> Login</a></span>
                            <a href="{{route('register')}}" class=""><i class='bx bx-log-in-circle'></i> Register</a>
                        @endguest
                            <div class="search-box d-inline-block">
                                <i class='bx bx-search'></i>
                            </div>

                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
