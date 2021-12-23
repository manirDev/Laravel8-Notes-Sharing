<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('assets')}}/Ahome/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Dashtreme</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('admin_home')}}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">Forms & Tables</li>
        <li>
            <a href="{{route('admin_content')}}">
                <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                </div>
                <div class="menu-title">Shared-Not</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin_category')}}">
                <div class="parent-icon"><i class='bx bx-category'></i>
                </div>
                <div class="menu-title">Categories</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin_message')}}" >
                <div class="parent-icon"><i class='bx bx-envelope'></i>
                </div>
                <div class="menu-title">Messages</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin_users')}}">
                <div class="parent-icon"><i class='bx bx-user'></i>
                </div>
                <div class="menu-title">Users</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin_review')}}">
                <div class="parent-icon"><i class='bx bx-revision'></i>
                </div>
                <div class="menu-title">Reviews</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin_faq')}}">
                <div class="parent-icon"><i class='bx bx-question-mark'></i>
                </div>
                <div class="menu-title">Faq</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin_setting')}}">
                <div class="parent-icon"><i class='bx bx-cog'></i>
                </div>
                <div class="menu-title">Settings</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
