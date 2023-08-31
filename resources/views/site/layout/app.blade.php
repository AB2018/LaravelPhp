<!DOCTYPE html>
<html>
@include('site.head')

<body>
    
    @include('site.nav')
    @section('main')
    @show

    @include('site.footer')
    @yield('userjs')
</body>

</html>

