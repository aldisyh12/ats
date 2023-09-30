@extends('layouts.uBolts.index')

@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
{{--                <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Buat <span class="m-l-5"><i class="fa fa-cog"></i></span></button>--}}
{{--                <ul class="dropdown-menu drop-menu-right" role="menu">--}}
{{--                    <li><a href="#">Action</a></li>--}}
{{--                    <li><a href="#">Another action</a></li>--}}
{{--                    <li><a href="#">Something else here</a></li>--}}
{{--                    <li class="divider"></li>--}}
{{--                    <li><a href="#">Separated link</a></li>--}}
{{--                </ul>--}}
            </div>

            <h4 class="page-title">Kategori</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Master</a>
                </li>
                <li class="active">
                    Kategori
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card-box">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.category.update', $record->id) }}">
                    @csrf
                    <div class="form-group">
                        <div class="col-md-11">
                            <label>Nama Kategori</label>
                            <input type="text" name="name" class="form-control" placeholder="placeholder" value="{{ $record->name }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="btn-group pull-right m-t-15">
                            <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
