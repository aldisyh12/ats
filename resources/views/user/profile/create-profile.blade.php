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

            <h4 class="page-title">Lengkapi Profile</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Profile</a>
                </li>
                <li class="active">
                    Data Diri
                </li>
            </ol>
        </div>
    </div>

    <!-- Forms -->
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card-box">
                <h2>Tentang Saya</h2>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Judul Pekerjaan</label>
                            <input type="text" class="form-control" name="job_header" placeholder="Input Judul Pekerjaan" required />
                        </div>
                    </div>
                </div>

                <br><br>

                <h2>Pengalaman Kerja</h2>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Judul Pekerjaan</label>
                            <input type="text" class="form-control" name="job_header" placeholder="Input Judul Pekerjaan" required />
                        </div>
                    </div>
                </div>

                <br><br>

                <h2>Pendidikan</h2>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Judul Pekerjaan</label>
                            <input type="text" class="form-control" name="job_header" placeholder="Input Judul Pekerjaan" required />
                        </div>
                    </div>
                </div>

                <br><br>

                <h2>Skills</h2>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Judul Pekerjaan</label>
                            <input type="text" class="form-control" name="job_header" placeholder="Input Judul Pekerjaan" required />
                        </div>
                    </div>
                </div>

                <br><br>

                <h2>Minat & Prefensi Pekerjaan</h2>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Judul Pekerjaan</label>
                            <input type="text" class="form-control" name="job_header" placeholder="Input Judul Pekerjaan" required />
                        </div>
                    </div>
                </div>

                <br><br>

                <h2>Resume</h2>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Judul Pekerjaan</label>
                            <input type="text" class="form-control" name="job_header" placeholder="Input Judul Pekerjaan" required />
                        </div>
                    </div>
                </div>

                <br><br>

                <h2>Media Sosial</h2>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Judul Pekerjaan</label>
                            <input type="text" class="form-control" name="job_header" placeholder="Input Judul Pekerjaan" required />
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-sm-3"></div>
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
