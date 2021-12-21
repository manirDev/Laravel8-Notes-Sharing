<style>
    .myHeader ul{
        display: flex;
        flex-direction: column;
    }
</style>

<div class="myHeader">
    <ul>
        <li><a href="{{route('myprofile')}}" class="active"><i class='bx bxs-dashboard'></i> Dashboard</a></li>
        <li><a href="orders.html"><i class='bx bx-cart'></i> Orders</a></li>
        <li><a href=""><i class='bx bx-download'></i> Downloads</a></li>
        <li><a href="{{route('user_content')}}"><i class='bx bx-home-alt'></i> My Not-Contents</a></li>
        <li><a href="{{route('user-profile')}}"><i class='bx bx-edit'></i> Account Details</a></li>
        <li><a href="#"><i class='bx bx-log-out'></i> Logout</a></li>
    </ul>
</div>
