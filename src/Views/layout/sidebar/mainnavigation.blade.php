<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
        </ul>
    </li>
    @foreach(config('adminlte.links') as $link)
        @if($link['treeview'])
            <li class="treeview
            @foreach($link['links'] as $children)
                {{ Route::is($children['route_name']) ? 'active' : '' }}
            @endforeach
            ">
                <a href="#">
                    <i class="fa fa-{{ $link['icon'] }}"></i> <span>{{ $link['name'] }}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    @foreach($link['links'] as $children)
                        <li class="{{ Route::is($children['route_name']) ? 'active' : '' }}">
                            <a href="{{ route($children['route_name']) }}"><i class="fa fa-circle-o"></i> {{ $children['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @else
            <li class="{{ Route::is($link['route_name']) ? 'active' : '' }}">
                <a href="{{ route($link['route_name']) }}">
                    <i class="fa fa-{{ $link['icon'] }}"></i>
                    <span>{{ $link['name'] }}</span>
                </a>
            </li>
        @endif
    @endforeach
</ul>