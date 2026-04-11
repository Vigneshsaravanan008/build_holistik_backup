<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{route("admin.dashboard")}}" class="brand-link">
        <img src="{{asset($setting->logo)}}" alt="{{env("APP_NAME")}}" class="brand-image img-circle elevation-3"
            style="opacity:.8">
        <span class="brand-text font-weight-light">{{env("APP_NAME")}}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link {{request()->routeIs('admin.dashboard')?"active":""}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-header">Assests</li>
               
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-image"></i>
                        <p>
                            Assets
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("admin.pagemanagement")}}" class="nav-link {{request()->routeIs('admin.pagemanagement')?"active":""}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Page Management</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">Service</li>
                <li class="nav-item">
                    <a href="{{route('admin.building')}}" class="nav-link {{request()->routeIs('admin.building')?"active":""}}">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <p>
                            Immune Scoring Systems
                        </p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{route('admin.mediacoverage')}}" class="nav-link {{request()->routeIs('admin.mediacoverage')?"active":""}}">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <p>
                            Media Coverage
                        </p>
                    </a>
                </li>

                <li class="nav-header">Contributions</li>
                <li class="nav-item">
                    <a href="{{route('admin.contribution')}}" class="nav-link {{request()->routeIs('admin.contribution')?"active":""}}">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <p>
                            Contributions
                        </p>
                    </a>
                </li>

                <li class="nav-header">Press Release</li>
                <li class="nav-item">
                    <a href="{{route('admin.pressrelease')}}" class="nav-link {{request()->routeIs('admin.pressrelease')?"active":""}}">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <p>
                            Press Release
                        </p>
                    </a>
                </li>
                
                <li class="nav-header">Forms</li>
                <li class="nav-item">
                    <a href="{{route("admin.contactus")}}" class="nav-link {{request()->routeIs('admin.contactus')?"active":""}}">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <p>
                            Contact Us
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("admin.subscription")}}" class="nav-link {{request()->routeIs('admin.subscription')?"active":""}}">
                        <i class="nav-icon fas fa-paper-plane"></i>
                        <p>
                            Subscriptions
                        </p>
                    </a>
                </li>

                <li class="nav-header">Settings & SEO</li>
                <li class="nav-item">
                    <a href="{{route("admin.setting")}}" class="nav-link {{request()->routeIs('admin.setting')?"active":""}}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Settings</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
