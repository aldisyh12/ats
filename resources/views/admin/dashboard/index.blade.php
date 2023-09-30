@extends('layouts.uBolts.index')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
{{--                <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>--}}
{{--                <ul class="dropdown-menu drop-menu-right" role="menu">--}}
{{--                    <li><a href="#">Action</a></li>--}}
{{--                    <li><a href="#">Another action</a></li>--}}
{{--                    <li><a href="#">Something else here</a></li>--}}
{{--                    <li class="divider"></li>--}}
{{--                    <li><a href="#">Separated link</a></li>--}}
{{--                </ul>--}}
            </div>

            <h4 class="page-title">Dashboard</h4>
            <p class="text-muted page-title-alt">Halo {{ auth()->user()->name }}, Selamat datang di panel admin Cipta Karsa Karya !</p>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="widget-bg-color-icon card-box">
            <div class="bg-icon bg-icon-primary pull-left">
                <i class="md md-location-city text-primary"></i>
            </div>
            <div class="text-right">
                <h3 class="text-dark"><b class="counter">{{ $countCabang ?? 0 }}</b></h3>
                <p class="text-muted">Total Cabang</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-bg-color-icon card-box fadeInDown animated">
                <div class="bg-icon bg-icon-info pull-left">
                    <i class="md md-verified-user text-info"></i>
                </div>
                <div class="text-right">
                    <h3 class="text-dark"><b class="counter">{{ $countJob ?? 0 }}</b></h3>
                    <p class="text-muted">Total Pekerjaan</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="widget-bg-color-icon card-box">
                <div class="bg-icon bg-icon-pink pull-left">
                    <i class="md md-face-unlock text-primary"></i>
                </div>
                <div class="text-right">
                    <h3 class="text-dark"><b class="counter">{{ $countPelamar ?? 0 }}</b></h3>
                    <p class="text-muted">Total Pelamar</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

{{--        <div class="col-md-6 col-lg-3">--}}
{{--            <div class="widget-bg-color-icon card-box">--}}
{{--                <div class="bg-icon bg-icon-purple pull-left">--}}
{{--                    <i class="md md-equalizer text-purple"></i>--}}
{{--                </div>--}}
{{--                <div class="text-right">--}}
{{--                    <h3 class="text-dark"><b class="counter">0.16</b>%</h3>--}}
{{--                    <p class="text-muted">Conversion</p>--}}
{{--                </div>--}}
{{--                <div class="clearfix"></div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-md-6 col-lg-3">--}}
{{--            <div class="widget-bg-color-icon card-box">--}}
{{--                <div class="bg-icon bg-icon-success pull-left">--}}
{{--                    <i class="md md-remove-red-eye text-success"></i>--}}
{{--                </div>--}}
{{--                <div class="text-right">--}}
{{--                    <h3 class="text-dark"><b class="counter">64,570</b></h3>--}}
{{--                    <p class="text-muted">Today's Visits</p>--}}
{{--                </div>--}}
{{--                <div class="clearfix"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
