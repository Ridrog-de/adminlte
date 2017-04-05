<ul class="nav navbar-nav">
    @stack('top-nav-left')

    @foreach(config('adminlte.topMenuLeft') as $partial)
        @include($partial)
    @endforeach


</ul>