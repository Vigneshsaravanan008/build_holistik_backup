<style>
    .user-info{
        padding: 6px 80px 5px 65px;
    }
</style>
<nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                    class="fas fa-bars"></i>
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('admin.dashboard')}}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route("admin.dashboard")}}" class="nav-link">Contact Us</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
                <div class="user-panel nav-link" data-toggle="dropdown">
                    <img src="{{asset(($image==null)?$setting->common_image:$image)}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="javascript:void(0)" class="dropdown-item user-panel user-info">
                            <img src="{{asset(($image==null)?$setting->common_image:$image)}}" class="img-circle elevation-2" alt="User Image">
                            <span class="mx-3 text-muted text-lg">{{Auth::guard("admin")->user()->name}}</span>
                        </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{route('admin.profile')}}" class="dropdown-item">
                        <i class="fas fa-user"></i> 
                        <span class="text-muted text-lg ml-2">Profile</span>
                    </a>  
                    <div class="dropdown-divider"></div>
                    <a href="{{route('admin.setting')}}" class="dropdown-item">
                        <i class="fas fa-cog"></i> 
                        <span class="text-muted text-lg ml-2">Settings</span>
                    </a>
                   
                    <div class="dropdown-divider"></div>
                    <a href="{{route('admin.logout')}}" class="dropdown-item">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="text-muted text-lg ml-2">Logout</span>
                    </a>
                    <div class="dropdown-divider"></div>
                </div>
            {{-- </a> --}}
        </li>
    </ul>
</nav>