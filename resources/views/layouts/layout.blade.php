<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('layouts.common.style')
<!-- /END GA -->
</head>

<body >
    @include('layouts.common.sidebar')

          @yield('content')
</body>
    @include('layouts.common.footer')
    @include('layouts.common.js')

</html>
