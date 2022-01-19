
<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
</div>
<div class="search-bar flex-grow-1">
    <div class="position-relative search-bar-box">
        <input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
        <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
    </div>
</div>

<div class="user-box dropdown">
    @auth
    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{Auth::user()->profile_photo_url}}" class="user-img" alt="user avatar">
        <div class="user-info ps-3">
            <p class="user-name mb-0">{{Auth::user()->name}}</p>
            <p class="designattion mb-0">{{Auth::user()->email}}</p>
        </div>
    </a>
    @endauth
    <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="{{route('user-profile')}}"><i class="bx bx-user"></i><span>Profile</span></a>
        </li>
        <li><a class="dropdown-item" href="{{route('admin_setting')}}"><i class="bx bx-cog"></i><span>Settings</span></a>
        </li>
        <li><a class="dropdown-item" href="{{route('home')}}"><i class='bx bx-home-circle'></i><span>Front Page</span></a>
        </li>
        <li>
            <div class="dropdown-divider mb-0"></div>
        </li>
        <li>
            @auth
                <a class="dropdown-item" href="{{route('admin_logout')}}"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
            @endauth
        </li>
    </ul>
</div>

