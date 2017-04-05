<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        @stack('top-nav-right')

        @if(config('adminlte.topmenu.messages'))
            @include('adminlte::layout.header.menu.messages')
        @endif

        @if(config('adminlte.topmenu.notifications'))
            @include('adminlte::layout.header.menu.notifications')
        @endif

        @if(config('adminlte.topmenu.tasks'))
            @include('adminlte::layout.header.menu.tasks')
        @endif

        @if(config('adminlte.topmenu.userAccount'))
            @include('adminlte::layout.header.menu.userAccount')
        @endif

        @if(config('adminlte.topmenu.controlBarToggle'))
            @include('adminlte::layout.header.menu.controlBarToggle')
         @endif

    </ul>
</div>