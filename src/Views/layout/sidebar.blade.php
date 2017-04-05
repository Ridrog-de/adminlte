<section class="sidebar">
    @stack('sidebar-top')

    @if(config('adminlte.mainmenu.userpanel'))
        @include('adminlte::layout.sidebar.userpanel')
    @endif

    @if(config('adminlte.mainmenu.searchform'))
        @include('adminlte::layout.sidebar.searchform')
    @endif

    @if(config('adminlte.mainmenu.mainnavigation'))
        @include('adminlte::layout.sidebar.mainnavigation')
    @endif

    @stack('sidebar-bottom')
</section>
