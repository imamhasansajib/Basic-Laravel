<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.includes.head')
</head>

<body>
    @include('website.includes.nav')
    @yield('abc')
    <!-- Footer-->
    @include('website.includes.footer')
    @yield('xyz')
</body>

</html>