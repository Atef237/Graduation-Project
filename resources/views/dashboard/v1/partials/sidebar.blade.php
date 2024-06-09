<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.home')}}" class="brand-link">
        <img src="{{asset('dashboard-assets')}}/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8 ;background-color: #fff">
        <span class="brand-text font-weight-light">{{env('app_name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dashboard-assets')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                    <a href="#" class="d-block">{{auth('admin')->user()?->name ?? __('user_name') }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            {{__('all.donation_scopes')}}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item">
                            <a href="{{route('donation_scopes.index')}}" class="nav-link {{ request()->is('admin/donation_scopes') ? 'active' : ''}}">
                                <i class="far fa-list-alt nav-icon"></i>
                                <p>{{__('all.donation_scopes_index')}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('donation_scopes.create')}}" class="nav-link {{ request()->is('admin/donation_scopes/create') ? 'active' : ''}}">
                                <i class="far fa-plus-square nav-icon"></i>
                                <p>{{__('all.donation_scopes_create')}}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            {{__('all.donation_projects')}}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item">
                            <a href="{{route('donation_projects.index')}}" class="nav-link {{ request()->is('admin/donation_projects') ? 'active' : ''}}">
                                <i class="far fa-list-alt nav-icon"></i>
                                <p>{{__('all.donation_projects')}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('donation_projects.create')}}" class="nav-link {{ request()->is('admin/donation_projects/create') ? 'active' : ''}}">
                                <i class="far fa-plus-square nav-icon"></i>
                                <p>{{__('all.donation_scopes_create')}}</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            {{__('all.donor_request')}}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item">
                            <a href="{{route('donor_request.index')}}" class="nav-link {{ request()->is('admin/donor_request') ? 'active' : ''}}">
                                <i class="far fa-list-alt nav-icon"></i>
                                <p>{{__('all.donor_request_index')}}</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            {{__('all.donor_project')}}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item">
                            <a href="{{route('donorProject')}}" class="nav-link {{ request()->is('admin/donation_projects') ? 'active' : ''}}">
                                <i class="far fa-list-alt nav-icon"></i>
                                <p>{{__('all.donor_project_index')}}</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
