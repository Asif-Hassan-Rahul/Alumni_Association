<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #161F37">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
        <img src="{{asset('assets/img/sarcp-logo.png')}}" alt="SMET Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">BUET ALUMNI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <a href="{{route('dashboard')}}"><img src="{{auth()->user()->photo_url != null ? url('storage/'.auth()->user()->photo_url) : asset('/assets/img/null/avatar.jpg')}}" class="img-circle elevation-2" alt="User Image"></a>
            </div>
            <div class="info">
                <a href="{{route('dashboard')}}" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-meteor"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('edit_user_profile')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>
                            Edit Profile
                        </p>
                    </a>
                </li>
                @can('user-list')
                <li class="nav-item">
                    <a href="{{route('manage_users.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-check"></i>
                        <p>
                            Manage Users
                        </p>
                    </a>
                </li>
                @endcan
                @can('role-list')
                <li class="nav-item">
                    <a href="{{route('manage_roles.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user-secret"></i>
                        <p>
                            Manage Roles
                        </p>
                    </a>
                </li>
                @endcan

                @can('user-can')
                    <li class="nav-item">
                        <a href="{{route('manage_alumni.create_non_resource',\Illuminate\Support\Facades\Auth::id())}}" class="nav-link">
                            <i class="nav-icon fas fa-user-secret"></i>
                            <p>
                                Alumni Form
                            </p>
                        </a>
                    </li>
                @endcan

                @can('alumni-can')
                    <li class="nav-item">
                        <a href="{{route('manage_alumni.show',\Illuminate\Support\Facades\Auth::id())}}" class="nav-link">
                            <i class="nav-icon fas fa-user-secret"></i>
                            <p>
                                Alumni Information
                            </p>
                        </a>
                    </li>
                @endcan

                @can('user-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-camera"></i>
                            <p>
                                Multimedia
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="display: none;">
                            <li class="nav-item">
                                <a href="{{route('blog_categories.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blog Categories</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('blogs.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Blogs</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('gallery_index')}}" class="nav-link">
                                    <i class="fa fa-images nav-icon"></i>
                                    <p>Gallery</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan





                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt nav-icon"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
