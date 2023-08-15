<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('layouts.fe.meta')

    <title>{{ config('app.name2', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('fe') }}/img/icon/bavel.png">

    @include('layouts.fe.css')

</head>

<body>

    @include('layouts.fe.header')

    @yield('content')

    @include('layouts.fe.footer')

    @include('layouts.fe.js')

</body>

</html>
