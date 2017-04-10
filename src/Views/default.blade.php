<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('meta')

    @include('adminlte::layout.partials.csrf')


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
<div class="wrapper" id="app">

    <header class="main-header">

        @include('adminlte::layout.header')

    </header>

    <aside class="main-sidebar">

        @include('adminlte::layout.sidebar')

    </aside>


    <div class="content-wrapper">

        <section class="content-header">

            @yield('content-header')

        </section>

        <section class="content">

            @yield('content')

        </section>

    </div>

    @if(config('adminlte.footer.show'))

        <footer class="main-footer">

            @include('adminlte::layout.footer')

        </footer>

    @endif


    <aside class="control-sidebar control-sidebar-dark">

        @include('adminlte::layout.controllbar')

    </aside>

    <div class="control-sidebar-bg"></div>

</div>


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
