@include(config('adminlte.controlBar.tabsMenu'))

<div class="tab-content">

    @foreach(config('adminlte.controlBar.tabPanes') as $partial)

        @include($partial)

    @endforeach

</div>