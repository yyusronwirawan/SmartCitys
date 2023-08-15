
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <div class="navbar-bars">
                <a href="#" class="navbar-title sidebar-toggle" style="padding: 0;"><i
                        class="ion-navicon-round"></i></a>
                <a href="{{ route('fe.index') }}" class="navbar-title">{{ config('app.name', 'Laravel') }}</a>
            </div>
            <div class="navbar-item">
                <a href="{{ route('fe.index') }}" class="navbar-title">{{ config('app.name', 'Laravel') }}</a>
                <ul>
                    <li><a href="{{ route('fe.about') }}">Tentang</a></li>
                    {{-- <li><a href="{{ route('fe.about') }}">Budaya</a></li> --}}
                    <li><a href="{{ route('fe.gallery') }}">Galeri</a></li>
                    {{-- <li><a data-slide="slides" data-slide-target="#discover">Wisata</a></li> --}}
                    <li><a href="{{ route('fe.news') }}">Berita</a></li>
                    <li><a href="{{ route('fe.contact') }}">Kontak</a></li>
                    @guest
                        @if (Route::has('login'))
                            <li><button class="btn-login" id="openLogin">LOGIN</button></li>
                        @endif
                    @else
                        @if (auth()->user()->hasRole('admin'))
                            <li><button class="btn-login" onclick="location.href='{{ route('home') }}'" type="button">Dashboard</button></li>
                        @else
                            <li><button class="btn-login" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</button></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endif
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="sidebar-list">
            <li><a href="" class="close"><span class="ion-android-close"></span></a></li>
            <li class="sidebar-list-hover"><a href="{{ route('fe.index') }}">Home</a></li>
            <li class="sidebar-list-hover"><a href="{{ route('fe.about') }}">Tentang</a></li>
            {{-- <li class="sidebar-list-hover"><a href="{{ route('fe.about') }}">Budaya</a></li> --}}
            <li class="sidebar-list-hover"><a href="{{ route('fe.gallery') }}">Galeri</a></li>
            {{-- <li class="sidebar-list-hover"><a href="{{ route('fe.index') }}#discover">Wisata</a></li> --}}
            <li class="sidebar-list-hover"><a href="{{ route('fe.news') }}">Berita</a></li>
            <li class="sidebar-list-hover"><a href="{{ route('fe.contact') }}">Kontak</a></li>
            @guest
                @if (Route::has('login'))
                    <li><a class="btn btn-orange btn-round" href="{{ route('login') }}">Login</a></li>
                @endif
            @endguest
        </ul>
    </div>

    <!-- Sidebar Overlay -->
    <section class="sidebar-overlay"></section>

    <!-- Login Form -->
    <div class="login-form">
        <div class="login-top">
            <span class="close">&times;</span>
        </div>
        <form method="POST" action="{{ route('login') }}" class="login">
            @csrf
            <h3 class="text-center">
                {{ config('app.name', 'Laravel') }} Log In
            </h3>
            <div class="form-input">
                <label>Email</label> <br>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-input">
                <label>Password</label> <br>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-input">
                <button type="submit" class="btn btn-login">Log In</button>
            </div>
            {{-- <a href="" class="text-center">Don't have account ? Register now</a> --}}
        </form>
    </div>

    <div class="login-overlay"></div>
