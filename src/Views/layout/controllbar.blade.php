{{-- Tabs Menu --}}
@include(config('adminlte.controlBar.tabsMenu'))
{{-- Tab panes --}}
<div class="tab-content">

    @foreach(config('adminlte.controlBar.tabPanes') as $partial)
        @include($partial)
    @endforeach
</div>