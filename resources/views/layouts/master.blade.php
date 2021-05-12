<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    @stack('meta')
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
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
