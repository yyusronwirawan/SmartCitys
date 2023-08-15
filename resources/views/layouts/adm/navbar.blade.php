<nav class="main-header navbar navbar-expand navbar-white navbar-dark bg-dark border-bottom-0">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('fe.index') }}" class="nav-link">Halaman Utama</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        {{-- @if (count(config('app.available_locales', [])) > 1)
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
                    {!! app()->getLocale() == 'id' ? '<i class="flag-icon flag-icon-id"></i>' : '<i class="flag-icon flag-icon-us"></i>' !!}
                </a>
                <div class="dropdown-menu dropdown-menu-right" style="left: inherit; right: 0px;">
                    <a href="{{ route('switch_language', 'id') }}" class="dropdown-item {{ app()->getLocale() == 'id' ? 'active' : '' }}">
                        <i class="flag-icon flag-icon-id mr-2"></i> {{ trans('header.indo') }}
                    </a>
                    <a href="{{ route('switch_language', 'en') }}" class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}">
                        <i class="flag-icon flag-icon-us mr-2"></i> {{ trans('header.ing') }}
                    </a>
                </div>
            </li>
        @endif --}}
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
