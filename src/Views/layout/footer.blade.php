@stack('footer')

@foreach(config('adminlte.footer.content') as $partials)

    @include($partials)

@endforeach