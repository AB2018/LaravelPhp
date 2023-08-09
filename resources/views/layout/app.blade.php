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
    <script src="{{asset('js/app.min.js')}}"></script>
</body>
</html>
