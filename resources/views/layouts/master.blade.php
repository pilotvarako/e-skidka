<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0">
    @stack('meta')
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/base.css') }}"/>
    @stack('css')
</head>
<body>

@auth
    @include('base.header_auth')
@endauth

@guest
    @include('base.header_guest')
@endguest

<main>
    @yield('content')
</main>

@include('base.footer')

</body>
</html>
