<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adminarea | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @yield('meta')

    @if(config('adminlte.style.mix'))

        <link rel="stylesheet" href="{{config('adminlte.style.mix_file')}}">

    @else

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

        @include('adminlte::style.main')

        @include('adminlte::skins.'. config('adminlte.style.skin'))

    @endif

    @yield('styles')

</head>
<body class="hold-transition skin-{{config('adminlte.style.skin')}}

@if(config('adminlte.layout.sidebar-collapse'))
        sidebar-collapse
    @endif

@if(config('adminlte.layout.sidebar-mini'))
        sidebar-mini
    @endif

@if(config('adminlte.layout.top-nav'))
        layout-top-nav
    @endif

@if(config('adminlte.layout.boxed'))
        layout-boxed
    @endif
        ">
<div class="wrapper">

    <header class="main-header">
        @include('adminlte::layout.header')
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        @include('adminlte::layout.sidebar')
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('content-header')
        </section>

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @if(config('adminlte.footer'))
        <footer class="main-footer">
            @include('adminlte::layout.footer')
        </footer>
@endif

<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        @include('adminlte::layout.controllbar')
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@if(config('adminlte.script.mix'))

    <script src="{{ config('adminlte.script.mix_file') }}"></script>

@else

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    @include('adminlte::js.app')

@endif

@yield('scripts')
</body>
</html>
