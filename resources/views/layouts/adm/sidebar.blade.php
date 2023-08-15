
        <aside class="main-sidebar main-sidebar-custom sidebar-dark-olive elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="brand-link bg-olive">
                <img src="{{ asset('adm') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-bold">{{ config('app.name', 'Laravel') }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ Auth::user()->avatar == NULL ? asset('adm').'/dist/img/avatar5.png' : '' }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-flat nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        @can('dashboard-R')
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-home"></i>
                                <p>{{ trans('menu.dashboard.title') }}</p>
                            </a>
                        </li>
                        @endcan
                        @canany(['destination-R', 'news-R', 'culture-R', 'event-R'])
                        <li class="nav-item {{ Request::routeIs('admin.destination*') || Request::routeIs('admin.news*') || Request::routeIs('admin.culture*') || Request::routeIs('admin.event*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::routeIs('admin.destination*') || Request::routeIs('admin.news*') || Request::routeIs('admin.culture*') || Request::routeIs('admin.event*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>
                                    Menu Post
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('destination-R')
                                <li class="nav-item">
                                    <a href="{{ route('admin.destination.index') }}" class="nav-link {{ Request::routeIs('admin.destination*') ? 'active' : '' }}">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>Wisata</p>
                                    </a>
                                </li>
                                @endcan
                                @can('news-R')
                                <li class="nav-item">
                                    <a href="{{ route('admin.news.index') }}" class="nav-link {{ Request::routeIs('admin.news*') ? 'active' : '' }}">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>Berita</p>
                                    </a>
                                </li>
                                @endcan
                                @can('culture-R')
                                <li class="nav-item">
                                    <a href="{{ route('admin.culture.index') }}" class="nav-link {{ Request::routeIs('admin.culture*') ? 'active' : '' }}">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>Budaya</p>
                                    </a>
                                </li>
                                @endcan
                                @can('event-R')
                                <li class="nav-item">
                                    <a href="{{ route('admin.event.index') }}" class="nav-link {{ Request::routeIs('admin.event*') ? 'active' : '' }}">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>Acara</p>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        @endcan
                        @can('smartcity-R')
                        <li class="nav-item">
                            <a href="{{ route('admin.smartcity.index') }}" class="nav-link {{ Request::routeIs('admin.smartcity*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>Menu Smart City</p>
                            </a>
                        </li>
                        @endcan
                        @can('about-R')
                        <li class="nav-item">
                            <a href="{{ route('admin.about.index') }}" class="nav-link {{ Request::routeIs('admin.about*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>Menu Tentang</p>
                            </a>
                        </li>
                        @endcan
                        @can('contact-R')
                        <li class="nav-item">
                            <a href="{{ route('admin.contact.index') }}" class="nav-link {{ Request::routeIs('admin.contact*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-comments"></i>
                                <p>Menu Pesan</p>
                            </a>
                        </li>
                        @endcan
                        @canany(['role-R', 'permission-R', 'user-R'])
                        <li class="nav-item {{ Request::routeIs('roles*') || Request::routeIs('permissions*') || Request::routeIs('users*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::routeIs('roles*') || Request::routeIs('permissions*') || Request::routeIs('users*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>
                                    {{ trans('menu.userManagement.title') }}
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                {{-- @can('role-R')
                                <li class="nav-item">
                                    <a href="{{ route('roles.index') }}" class="nav-link {{ Request::routeIs('roles*') ? 'active' : '' }}">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>{{ trans('menu.role.title') }}</p>
                                    </a>
                                </li>
                                @endcan
                                @can('permission-R')
                                <li class="nav-item">
                                    <a href="{{ route('permissions.index') }}" class="nav-link {{ Request::routeIs('permissions*') ? 'active' : '' }}">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>{{ trans('menu.permission.title') }}</p>
                                    </a>
                                </li>
                                @endcan --}}
                                @can('user-R')
                                <li class="nav-item">
                                    <a href="{{ route('users.index') }}" class="nav-link {{ Request::routeIs('users*') ? 'active' : '' }}">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>{{ trans('menu.user.title') }}</p>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        @endcan
                        {{-- @can('website-R')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-shield-alt"></i>
                                <p>
                                    {{ trans('menu.settingManagement.title') }}
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>{{ trans('menu.settingWebsite.title') }}</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>{{ trans('menu.termsOfService.title') }}</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>{{ trans('menu.privacyPolicy.title') }}</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endcan --}}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
            <div class="sidebar-custom accent-teal">
                @can('website-config')
                    <a href="#" class="btn btn-link"><i class="fas fa-cogs"></i></a>
                @endcan

                <!-- Logout Start -->
                <a href="{{ route('logout') }}" class="btn btn-danger hide-on-collapse pos-right" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ trans('auth.logout.title') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <!-- Logout End -->
            </div>
            <!-- /.sidebar-custom -->
        </aside>
