@extends('layouts.uBolts.index-user')

@push('css')
    <style>
    .child {
        /* Pusatkan secara vertikal dan horizontal */
        position: absolute;
        top: 50%;
        left: 50%;
    }
    .kanan{
        float: right;
    }
    .kiri{
        float: left;
    }
    </style>

    <link href="{{ asset('assets/ubolts/assets/plugins/multiselect/css/multi-select.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/ubolts/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" />
@endpush

@section('content')
    @if($cv->is_new == 1)
        <div class="row child">
            <div class="col-lg-12 col-md-8">
                <div class="container">
                    <div class="m-t-30 m-b-30 text-center">
                        <a href="{{ route('user.profile-create', auth()->user()->id) }}" class="btn btn-default waves-effect waves-light">Anda belum melengkapi profile</a>
                    </div>
                </div>
            </div>
        </div>
    @else
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
                <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                <ul class="dropdown-menu drop-menu-right" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>

            <h4 class="page-title">Profile</h4>
            <ol class="breadcrumb">
                <li><a href="#">Cari kerja</a></li>
                <li class="active">Profile</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-lg-3">
            <div class="profile-detail card-box">
                <div>
                    <img src="{{ asset('assets/ubolts/assets/images/users/avatar-2.jpg') }}" class="img-circle" alt="profile-image">

                    <ul class="list-inline status-list m-t-20">
                        <li>
                            <button type="button" class="btn btn-pink btn-custom btn-rounded waves-effect waves-light">Export Ke Pdf</button>
                        </li>

                        <li>
                            <button type="button" class="btn btn-pink btn-custom btn-rounded waves-effect waves-light">Lihat</button>
                        </li>
                    </ul>

                    <hr>


                    <div class="button-list m-t-20">
                        <button type="button" class="btn btn-facebook waves-effect waves-light">
                            <i class="fa fa-facebook"></i>
                        </button>

                        <button type="button" class="btn btn-twitter waves-effect waves-light">
                            <i class="fa fa-twitter"></i>
                        </button>

                        <button type="button" class="btn btn-linkedin waves-effect waves-light">
                            <i class="fa fa-linkedin"></i>
                        </button>

                        <button type="button" class="btn btn-dribbble waves-effect waves-light">
                            <i class="fa fa-dribbble"></i>
                        </button>

                    </div>
                </div>

            </div>
        </div>


        <div class="col-lg-9 col-md-8">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="kiri">Tentang Saya</h2>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary waves-effect waves-light kanan" data-toggle="modal"
                                data-target="#con-close-modal">Edit <span class="m-l-5"></span>
                        </button>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h4>{{ $cv->about ?? '-' }}</h4>
                    </div>
                </div>

                <br><br>

                <div class="row">
                    <div class="col-md-6">
                        <h2 class="kiri">Pengalaman Kerja</h2>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary waves-effect waves-light kanan" data-toggle="modal"
                                data-target="#con-close-modal-experience">Edit <span class="m-l-5"></span>
                        </button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">

                        <div class="p-20">
                            <div class="nicescroll p-l-r-10" style="max-height: 535px;">

                                <div class="timeline-2">
                                    @foreach($cv->pengalaman as $key => $value)
                                    <div class="time-item">
                                        <div class="item-info">
                                            <p>
                                                <strong>
                                                    <a href="#" class="text-info">{{ $value->perusahaan ?? '-' }}</a>
                                                    <br>
                                                </strong>
                                                {{ $value->posisi ?? '-' }}
                                                <br>
                                                <strong>{{ $value->perusahaan ?? '-' }}</strong>
                                                <br>
                                                <strong>{{ $value->date_start ?? '-' }} - {{ $value->date_end ?? '-' }}</strong>
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <br><br>

                <div class="row">
                    <div class="col-md-6">
                        <h2 class="kiri">Pendidikan</h2>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary waves-effect waves-light kanan" data-toggle="modal"
                                data-target="#con-close-modal-education">Edit <span class="m-l-5"></span>
                        </button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">

                        <div class="p-20">
                            <div class="nicescroll p-l-r-10" style="max-height: 535px;">

                                <div class="timeline-2">
                                    @foreach($cv->pendidikan as $key => $value)
                                        <div class="time-item">
                                            <div class="item-info">
                                                <p>
                                                    <strong>
                                                        <a href="#" class="text-info">{{ $value->institusi ?? '-' }}</a>
                                                        <br>
                                                    </strong>
                                                    {{ $value->gelar ?? '-' }}
                                                    <br>
                                                    <strong>{{ $value->bidang_studi ?? '-' }}</strong>
                                                    <br>
                                                    <strong>{{ $value->date_start ?? '-' }} - {{ $value->date_end ?? '-' }}</strong>
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <br><br>

                <div class="row">
                    <div class="col-md-6">
                        <h2 class="kiri">Skills</h2>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary waves-effect waves-light kanan" data-toggle="modal"
                                data-target="#con-close-modal-skill">Edit <span class="m-l-5"></span>
                        </button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        @foreach($cv->pendidikan as $key => $value)
                        <button type="button" class="btn btn-white btn-custom btn-rounded waves-effect">{{ $value->skill_id ?? '-' }}</button>
                        @endforeach
                    </div>
                </div>

                <br><br>

                <div class="row">
                    <div class="col-md-6">
                        <h2 class="kiri">Minat & Prefensi Pekerjaan</h2>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary btn-sm kanan">Edit</button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Kosong</h3>
                    </div>
                </div>

                <br><br>

                <div class="row">
                    <div class="col-md-6">
                        <h2 class="kiri">Resume</h2>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary waves-effect waves-light kanan" data-toggle="modal"
                                data-target="#con-close-modal-resume">Edit <span class="m-l-5"></span>
                        </button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Kosong</h3>
                    </div>
                </div>

                <br><br>

                <div class="row">
                    <div class="col-md-6">
                        <h2 class="kiri">Media Sosial</h2>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary waves-effect waves-light kanan" data-toggle="modal"
                                data-target="#con-close-modal-resume2">Edit <span class="m-l-5"></span>
                        </button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Kosong</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <form action="{{ route('user.profile-update') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Tentang Saya</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group" hidden>
                                    <input type="text" name="status" class="form-control" id="field-1" placeholder="Biodata Diri" value="1">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
{{--                                    <label for="field-1" class="control-label">Tentang Saya</label>--}}
                                    <input type="text" name="about" class="form-control" id="field-1" placeholder="Biodata Diri">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- /.modal -->

    <div id="con-close-modal-experience" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <form action="{{ route('user.profile-update') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Pengalaman Kerja</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group" hidden>
                                    <input type="text" name="status" class="form-control" id="field-1" placeholder="Biodata Diri" value="2">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="posisi" class="form-control" id="field-1" placeholder="Posisi">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="perusahaan" class="form-control" id="field-1" placeholder="Perusahaan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Mulai Bekerja</label>
                                    <input type="date" name="date_start" class="form-control" id="field-1" placeholder="Mulai Bekerja">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Selesai Bekerja</label>
                                    <input type="date" name="date_end" class="form-control" id="field-1" placeholder="Selesai Bekerja">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- /.modal -->

    <div id="con-close-modal-education" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <form action="{{ route('user.profile-update') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Pendidikan</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group" hidden>
                                    <input type="text" name="status" class="form-control" id="field-1" placeholder="Biodata Diri" value="3">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="institusi" class="form-control" id="field-1" placeholder="Institusi">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="gelar" class="form-control" id="field-1" placeholder="Gelar">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="bidang_studi" class="form-control" id="field-1" placeholder="Bidang Studi">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Mulai Pendidikan</label>
                                    <input type="date" name="date_start" class="form-control" id="field-1" placeholder="Mulai Bekerja">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Selesai pendidikan</label>
                                    <input type="date" name="date_end" class="form-control" id="field-1" placeholder="Selesai Bekerja">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- /.modal -->

    <div id="con-close-modal-skill" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <form action="{{ route('user.profile-update') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Keahlian</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group" hidden>
                                    <input type="text" name="status" class="form-control" id="field-1" placeholder="Biodata Diri" value="4">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="skill_id" class="form-control" id="field-1" placeholder="Keahlian">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- /.modal -->

    <div id="con-close-modal-resume" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <form action="{{ route('user.profile-update') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Upload Cv</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group" hidden>
                                    <input type="text" name="status" class="form-control" id="field-1" placeholder="Biodata Diri" value="5">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="file" name="resume_path" class="filestyle" data-buttonname="btn-white" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- /.modal -->

    <div id="con-close-modal-resume2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <form action="{{ route('user.profile-update') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Media Sosial</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group" hidden>
                                    <input type="text" name="status" class="form-control" id="field-1" placeholder="Biodata Diri" value="6">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="facebook" class="form-control" id="field-1" placeholder="Facebook">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="twitter" class="form-control" id="field-1" placeholder="Twitter">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="instagram" class="form-control" id="field-1" placeholder="Instagram">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="linked_in" class="form-control" id="field-1" placeholder="Linked In">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- /.modal -->
    @endif
@endsection

@push('js')
    <script src="{{ asset('assets/ubolts/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/ubolts/assets/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('assets/ubolts/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/ubolts/assets/pages/jquery.form-advanced.init.js') }}"></script>
@endpush
