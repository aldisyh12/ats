<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Cipta Karsa Karya</span></a>
            <!-- Image Logo here -->
            <!--<a href="index.html" class="logo">-->
            <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
            <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
            <!--</a>-->
        </div>
    </div>

    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="">
{{--                <div class="pull-left">--}}
{{--                    <button class="button-menu-mobile open-left waves-effect waves-light">--}}
{{--                        <i class="md md-menu"></i>--}}
{{--                    </button>--}}
{{--                    <span class="clearfix"></span>--}}
{{--                </div>--}}

{{--                <ul class="nav navbar-nav hidden-xs">--}}
{{--                    <li><a href="#" class="waves-effect waves-light">Files</a></li>--}}
{{--                    <li class="dropdown">--}}
{{--                        <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown"--}}
{{--                           role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span--}}
{{--                                class="caret"></span></a>--}}
{{--                        <ul class="dropdown-menu">--}}
{{--                            <li><a href="#">Action</a></li>--}}
{{--                            <li><a href="#">Another action</a></li>--}}
{{--                            <li><a href="#">Something else here</a></li>--}}
{{--                            <li><a href="#">Separated link</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}


                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="hidden-xs">
                        <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                    </li>
                    <li class="dropdown top-menu-item-xs">
                        <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="{{ asset('assets/ubolts/assets/images/users/avatar-1.jpg') }}" alt="user-img" class="img-circle"> </a>
                        <ul class="dropdown-menu">
                            @if(\App\Models\User::where('id', auth()->user()->id)->where('role_id', 2)->first())
                            <li><a href="{{ route('user.profile', auth()->user()->id) }}"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
{{--                            <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> Settings</a></li>--}}
{{--                            <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> Lock screen</a></li>--}}
                            <li class="divider"></li>
                            <li><a href="{{ route('logout') }}"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                            @else
                            <li><a href="{{ route('logout') }}"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
