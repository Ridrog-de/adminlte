<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        @stack('top-nav-right')

        @foreach(config('adminlte.topMenuRight') as $partial)
            @include($partial)
        @endforeach


        @if(config('adminlte.controlBar.toggle'))
            @include('adminlte::layout.header.controlBarToggle')
         @endif

    </ul>
</div>