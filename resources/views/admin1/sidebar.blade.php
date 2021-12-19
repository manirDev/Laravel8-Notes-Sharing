<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{asset('assets')}}/images/logo-icon.png" class="logo-icon" alt="logo icon">
            <h5 class="logo-text">Dashtreme Admin</h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
            <a href="{{route('admin_home')}}">
                <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>



        <li>
            <a href="{{route('admin_content')}}">
                <i class="zmdi zmdi-format-list-bulleted"></i> <span>Content</span>
            </a>
        </li>

        <li>
            <a href="{{route('admin_category')}}">
                <i class="zmdi zmdi-grid"></i> <span>Categories</span>
            </a>
        </li>
        <li>
            <a href="{{route('admin_message')}}">
                <i class="icon-settings mr-2"></i> <span>Messages</span>
            </a>
        </li>
        <li>
            <a href="{{route('admin_setting')}}">
                <i class="icon-settings mr-2"></i> <span>Settings</span>
            </a>
        </li>




    </ul>

</div>