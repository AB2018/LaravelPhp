<!DOCTYPE html>
<html>
@include('head')
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('header')

        <!-- Left side column. contains the logo and sidebar -->
        @include('sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @section('main')
            @show

            <!-- Main content -->
        </div>
        @include('footer')
    
    </div>
    <script src="{{asset('admin_asset/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
    <script src="{{asset('admin_asset/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_asset/dist/js/app.min.js')}}"></script>
    @yield('js')

</body>
</html>
