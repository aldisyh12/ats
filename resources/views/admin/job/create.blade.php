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
{{--            <div class="btn-group pull-right m-t-15">--}}
{{--                <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>--}}
{{--                <ul class="dropdown-menu drop-menu-right" role="menu">--}}
{{--                    <li><a href="#">Action</a></li>--}}
{{--                    <li><a href="#">Another action</a></li>--}}
{{--                    <li><a href="#">Something else here</a></li>--}}
{{--                    <li class="divider"></li>--}}
{{--                    <li><a href="#">Separated link</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}

            <h4 class="page-title">Buat Pekerjaan</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Pekerjaan</a>
                </li>
                <li class="active">
                    Buat Pekerjaan
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
                        <form role="form" action="{{ route('admin.job.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Judul Pekerjaan</label>
                                <input type="text" class="form-control" name="job_header" placeholder="Input Judul Pekerjaan" required />
                            </div>
                            <div class="form-group">
                                <label>Minimal Pengalaman</label>
                                <input type="text" class="form-control" name="job_header" placeholder="Input Pengalaman, Contoh : 2 Tahun" required />
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" class="form-control" name="job_header" placeholder="Input Jabatan, Contoh : Fullstack Programmer" required />
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categoryList as $key => $record)
                                    <option value="{{ $record->id }}">{{ $record->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="date" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Pekerjaan</label>
                                <textarea class="form-control" rows="5" name="description" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Input Gambar</label>
                                <input type="file" name="path" class="filestyle" data-buttonname="btn-white" required>
                            </div>
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
