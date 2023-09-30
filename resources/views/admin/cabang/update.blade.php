@extends('layouts.uBolts.index')

@push('css')
    <!-- DataTables -->
    <link href="{{ asset('assets/ubolts/assets/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/ubolts/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/ubolts/assets/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/ubolts/assets/plugins/multiselect/css/multi-select.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/ubolts/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/ubolts/assets/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/ubolts/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="row">
        <div class="col-sm-12">

            <h4 class="page-title">Ubah Cabang</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Cabang</a>
                </li>
                <li class="active">
                    Ubah Cabang
                </li>
            </ol>
        </div>
    </div>

    <!-- Forms -->
    <div class="row">
        <div class="col-sm-6">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" action="{{ route('admin.cabang.update', $record->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama Cabang</label>
                                <input type="text" class="form-control" name="name" value="{{ $record->name }}" placeholder="Input Nama Cabang" required />
                            </div>
                            <div class="form-group">
                                <label>Alamat Cabang</label>
                                <input type="text" class="form-control" name="alamat" value="{{ $record->alamat }}" placeholder="Input Alamat Cabang" required />
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Cabang</label>
                                <textarea class="form-control" rows="5" name="description" required>{{ $record->description }}</textarea>
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label>Input Foto</label>--}}
{{--                                <input type="file" name="path" class="filestyle" data-buttonname="btn-white">--}}
{{--                            </div>--}}
                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/ubolts/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/switchery/js/switchery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/ubolts/assets/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/ubolts/assets/plugins/jquery-quicksearch/jquery.quicksearch.js') }}"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>

    <script type="text/javascript" src="{{ asset('assets/ubolts/assets/plugins/autocomplete/jquery.mockjax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/ubolts/assets/plugins/autocomplete/jquery.autocomplete.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/ubolts/assets/plugins/autocomplete/countries.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/ubolts/assets/pages/autocomplete.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/ubolts/assets/pages/jquery.form-advanced.init.js') }}"></script>

    <script src="{{ asset('assets/ubolts/assets/js/jquery.core.js') }}"></script>
    <script src="{{ asset('assets/ubolts/assets/js/jquery.app.js') }}"></script>
@endpush
