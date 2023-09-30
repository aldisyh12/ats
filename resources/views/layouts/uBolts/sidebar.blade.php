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


                <li><a href="{{ route('admin.dashboard') }}"><i class="ti-home"></i> Dashboard </a></li>
                <li><a href="{{ route('admin.category') }}"><i class="ti-pencil-alt"></i> Kategori </a></li>
                <li><a href="{{ route('admin.job') }}"><i class="ti-menu-alt"></i> Pekerjaan </a></li>
                <li><a href="{{ route('admin.candidate') }}"><i class="ti-user"></i> Pelamar </a></li>
                <li><a href="{{ route('admin.skill') }}"><i class="ti-file"></i> Keahlian </a></li>
                <li><a href="{{ route('admin.cabang') }}"><i class="ti-map-alt"></i> Cabang </a></li>

{{--                <li class="has_sub">--}}
{{--                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-paint-bucket"></i> <span> Master </span> <span class="menu-arrow"></span> </a>--}}
{{--                    <ul class="list-unstyled">--}}
{{--                        <li><a href="{{ route('admin.category') }}">Kategori</a></li>--}}
{{--                        <li><a href="{{ route('admin.job') }}">Perkerjaan</a></li>--}}
{{--                        <li><a href="{{ route('admin.candidate') }}">Pelamar</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
