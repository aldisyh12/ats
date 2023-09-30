<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>

                <li class="text-muted menu-title">Navigasi</li>

                {{--                <li class="has_sub">--}}
                {{--                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> <span class="menu-arrow"></span></a>--}}
                {{--                    <ul class="list-unstyled">--}}
                {{--                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}


                <li><a href="{{ route('user.dashboard') }}"><i class="ti-home"></i> Dashboard </a></li>
                <li><a href="{{ route('user.job') }}"><i class="ti-pencil-alt"></i> Cari Kerja </a></li>
                <li><a href="{{ route('user.job.list') }}"><i class="ti-menu-alt"></i> Pekerjaan Anda </a></li>

{{--                <li class="has_sub">--}}
{{--                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-paint-bucket"></i> <span> Pekerjaan </span> <span class="menu-arrow"></span> </a>--}}
{{--                    <ul class="list-unstyled">--}}
{{--                        <li><a href="{{ route('user.job') }}">Cari Kerja</a></li>--}}
{{--                        <li><a href="{{ route('user.job.list') }}">Pekerjaan Anda</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
