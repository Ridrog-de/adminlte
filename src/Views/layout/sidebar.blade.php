<section class="sidebar">

    @stack('sidebar-top')

    @foreach(config('adminlte.sidebar') as $partial)

        @include($partial)

    @endforeach()


    @if(config('adminlte.mainmenu.show'))

        @include('adminlte::layout.sidebar.mainnavigation')

    @endif

    @stack('sidebar-bottom')

</section>
