        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                {{-- <img src="#" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
                <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    {{-- <div class="image">
                        <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div> --}}
                    <div class="info">
                        <a href="#" class="d-block">{{ auth('admin')->user()->name }}</a>
                    </div>
                </div>

                {{-- <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div> --}}

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li
                            class="nav-item {{ request()->routeIs('plans.*') ? 'menu-is-opening menu-open active' : '' }}">
                            <a href="#" class="nav-link {{ request()->routeIs('plans.*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                    plans
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @include('dashboard.layouts.inc.nav-list-item', [
                                    'title' => '',
                                    'icon' => 'fa-regular fa-eye',
                                    'route' => 'dashboard.plans.index',
                                ])

                                @include('dashboard.layouts.inc.nav-list-item', [
                                    'title' => '',
                                    'icon' => 'fa-solid fa-plus',
                                    'route' => 'dashboard.plans.create',
                                ])
                            </ul>
                        </li>

                        <li
                            class="nav-item {{ request()->routeIs('users.*') ? 'menu-is-opening menu-open active' : '' }}">
                            <a href="#" class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    users
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @include('dashboard.layouts.inc.nav-list-item', [
                                    'title' => '',
                                    'icon' => 'fa-regular fa-eye',
                                    'route' => 'dashboard.users.index',
                                ])

                                @include('dashboard.layouts.inc.nav-list-item', [
                                    'title' => '',
                                    'icon' => 'fa-solid fa-plus',
                                    'route' => 'dashboard.users.create',
                                ])
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
