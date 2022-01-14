<style>
    .myHeader ul{
        display: flex;
        flex-direction: column;
    }
</style>

@auth
    <div class="myHeader">
        <ul>
            <li><a href="{{route('myprofile')}}" class="active"><i class='bx bxs-dashboard'></i> Dashboard</a></li>
            <li><a href="{{route('user-profile')}}"  ><i class='bx bx-edit'></i> Account Details</a></li>
            <li><a href="{{route('user_content')}}"><i class='bx bx-home-alt'></i> My Not-Contents</a></li>
            <li><a href="{{route('myreviews')}}"><i class='bx bx-revision'></i> My Reviews</a></li>

            @php
                $userRoles = Auth::user()->roles->pluck('name') ;
            @endphp
            @if($userRoles->contains('admin'))
                <li><a href="{{route('admin_message')}}"><i class='bx bx-envelope'></i> My Messages</a></li>
                <li><a href="{{route('admin_home')}}"><i class='bx bx-home'></i> Admin Panel</a></li>
            @endif
            <li><a href="{{route('admin_logout')}}" target="_blank"><i class='bx bx-log-out'></i> Logout</a></li>
        </ul>
    </div>
@endauth
