<ul class="sidebar-menu">

    <li class="header">{{config('adminlte.mainmenu.title')}}</li>

    @if(config('adminlte.mainmenu.showLinks'))

        @include('adminlte::layout.sidebar.links')

    @endif

    @if(config('adminlte.mainmenu.showPartials'))

        @foreach(config('adminlte.mainmenu.partials') as $partial)

            @include($partial)

        @endforeach

    @endif

</ul>