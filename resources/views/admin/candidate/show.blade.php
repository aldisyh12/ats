@extends('layouts.uBolts.index')

@push('css')

    <style>
        .div {
            display: flex;
            justify-content: center;
        }
    </style>
@endpush

@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-lg-12">
{{--                <div class="col-sm-6">--}}
{{--                    <div class="div">--}}
{{--                        <form action="{{ route('admin.candidate.update', $record->id) }}" method="POST">--}}
{{--                            @csrf--}}
{{--                            <div class="form-group" hidden>--}}
{{--                                <input type="hidden" name="status" class="form-control" value="2">--}}
{{--                            </div>--}}
{{--                            <button class="btn btn-success" type="submit">Terima</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-6">--}}
{{--                    <div class="div">--}}
{{--                        <form action="{{ route('admin.candidate.update', $record->id) }}" method="POST">--}}
{{--                            @csrf--}}
{{--                            <div class="form-group" hidden>--}}
{{--                                <input type="hidden" name="status" class="form-control" value="3">--}}
{{--                            </div>--}}
{{--                            <button class="btn btn-danger" type="submit">Tolak</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="card-box">
                <div class="row">
                    <div class="col-sm-12">
                            <h4 class="m-t-0"><b>{{ $record->pekerjaan->job_header ?? '-' }} - {{ $record->category->name ?? '-' }}</b></h4>

                            <hr/>

                            <div class="media m-b-30 ">
                                <a href="#" class="pull-left">
                                    <img alt="" src="{{ asset('assets/ubolts/assets/images/users/avatar-2.jpg') }}" class="media-object thumb-sm img-circle">
                                </a>
                                <div class="media-body">
                                    {{--                                <span class="media-meta pull-right">07:23 AM</span>--}}
                                    <h4 class="text-primary m-0">{{ $record->user_pembuat->name ?? '-' }}</h4>
                                    <small class="text-muted">{{ $record->user_pembuat->email ?? '-' }}</small>
                                </div>
                            </div> <!-- media -->

                            <p><b>Kategori : {{ $record->category->name ?? '-' }}</b></p>
                            <p>{{ $record->pekerjaan->description ?? '-' }}</p>

                            <hr/>

                            <h4> <i class="fa fa-paperclip m-r-10 m-b-10"></i> Gambar </h4>

                            <div class="row">
                                @foreach($record->images as $key => $value)
                                    <div class="col-sm-2 col-xs-4">
                                        <img src="{{ asset('pekerjaan/'. $value->path ?? '-') }}" width="450px" height="500px">
                                    </div>
                                @endforeach
                            </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="kiri">Profile Pelamar</h2>
                    </div>
                    <div class="col-md-6">
                        <div class="col-sm-3">
                            <div class="div">
                                @if($record->status == 1)
                                <form action="{{ route('admin.candidate.update', $record->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group" hidden>
                                        <input type="hidden" name="status" class="form-control" value="2">
                                    </div>
                                    <button class="btn btn-success" type="submit">Terima</button>
                                </form>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="div">
                                @if($record->status == 1)
                                <form action="{{ route('admin.candidate.update', $record->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group" hidden>
                                        <input type="hidden" name="status" class="form-control" value="3">
                                    </div>
                                    <button class="btn btn-danger" type="submit">Tolak</button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h4>Nama : {{ $record->user->name ?? '-' }}</h4>
                        <h4>Email : {{ $record->user->email ?? '-' }}</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h2 class="kiri">Tentang Saya</h2>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h4>{{ $record->profile->about ?? '-' }}</h4>
                    </div>
                </div>

                <br><br>

                <div class="row">
                    <div class="col-md-6">
                        <h2 class="kiri">Pengalaman Kerja</h2>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">

                        <div class="p-20">
                            <div class="nicescroll p-l-r-10" style="max-height: 535px;">

                                <div class="timeline-2">
                                    @foreach($record->pengalaman as $key => $value)
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
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">

                        <div class="p-20">
                            <div class="nicescroll p-l-r-10" style="max-height: 535px;">

                                <div class="timeline-2">
                                    @foreach($record->pendidikan as $key => $value)
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
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        @foreach($record->pendidikan as $key => $value)
                            <button type="button" class="btn btn-white btn-custom btn-rounded waves-effect">{{ $value->skill_id ?? '-' }}</button>
                        @endforeach
                    </div>
                </div>

                <br><br>

{{--                <div class="row">--}}
{{--                    <div class="col-md-6">--}}
{{--                        <h2 class="kiri">Minat & Prefensi Pekerjaan</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <h3>Kosong</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <br><br>--}}

{{--                <div class="row">--}}
{{--                    <div class="col-md-6">--}}
{{--                        <h2 class="kiri">Resume</h2>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <h3>Kosong</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <br><br>--}}

{{--                <div class="row">--}}
{{--                    <div class="col-md-6">--}}
{{--                        <h2 class="kiri">Media Sosial</h2>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <h3>Kosong</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
