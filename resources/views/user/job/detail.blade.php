@extends('layouts.uBolts.index-user')

@section('content')
    <div class="row">

{{--        <!-- Left sidebar -->--}}
{{--        <div class="col-lg-3 col-md-4">--}}

{{--            <div class="p-20">--}}
{{--                <a href="email-compose.html" class="btn btn-danger btn-rounded btn-custom btn-block waves-effect waves-light">Compose</a>--}}

{{--                <div class="list-group mail-list  m-t-20">--}}
{{--                    <a href="email-inbox.html" class="list-group-item b-0 active"><i class="fa fa-download m-r-10"></i>Inbox <b>(8)</b></a>--}}
{{--                    <a href="#" class="list-group-item b-0"><i class="fa fa-star-o m-r-10"></i>Starred</a>--}}
{{--                    <a href="#" class="list-group-item b-0"><i class="fa fa-file-text-o m-r-10"></i>Draft <b>(20)</b></a>--}}
{{--                    <a href="#" class="list-group-item b-0"><i class="fa fa-paper-plane-o m-r-10"></i>Sent Mail</a>--}}
{{--                    <a href="#" class="list-group-item b-0"><i class="fa fa-trash-o m-r-10"></i>Trash <b>(354)</b></a>--}}
{{--                </div>--}}


{{--                <h3 class="panel-title m-t-40">Labels</h3>--}}

{{--                <div class="list-group b-0 mail-list">--}}
{{--                    <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-info m-r-10"></span>Web App</a>--}}
{{--                    <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-warning m-r-10"></span>Project 1</a>--}}
{{--                    <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-purple m-r-10"></span>Project 2</a>--}}
{{--                    <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-pink m-r-10"></span>Friends</a>--}}
{{--                    <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-success m-r-10"></span>Family</a>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--        <!-- End Left sidebar -->--}}

        <!-- Right Sidebar -->
        <div class="col-lg-9 col-md-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-toolbar m-t-20" role="toolbar">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                Kembali
                            </button>
                        </div>
                    </div>
                </div>
            </div> <!-- End row -->


            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box m-t-20">
                        <h4 class="m-t-0"><b>{{ $job->job_header }} - {{ $job->category->name }}</b></h4>

                        <hr/>

                        <div class="media m-b-30 ">
                            <a href="#" class="pull-left">
                                <img alt="" src="{{ asset('assets/ubolts/assets/images/users/avatar-2.jpg') }}" class="media-object thumb-sm img-circle">
                            </a>
                            <div class="media-body">
{{--                                <span class="media-meta pull-right">07:23 AM</span>--}}
                                <h4 class="text-primary m-0">{{ $job->user->name }}</h4>
                                <small class="text-muted">{{ $job->user->email }}</small>
                            </div>
                        </div> <!-- media -->

                        <p><b>Kategori : {{ $job->category->name }}</b></p>
                        <p>{{ $job->description }}</p>

                        <hr/>

                        <h4> <i class="fa fa-paperclip m-r-10 m-b-10"></i> Gambar </h4>

                        <div class="row">
                            @foreach($job->images as $key => $value)
                            <div class="col-sm-2 col-xs-4">
                                <img src="{{ asset('pekerjaan/'. $value->path) }}" width="450px" height="500px">
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <form action="{{ route('user.job.lamar') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="media m-b-0">
                        <a href="#" class="pull-left">
                            <img alt="" src="{{ asset('assets/ubolts/assets/images/users/avatar-9.jpg') }}" class="media-object thumb-sm img-circle">
                        </a>
                            <div class="media-body">
                                <div class="card-box">
                                    <div class="form-group" hidden>
                                        <input type="text" class="form-control" name="job_id" value="{{ $job->id }}" />
                                    </div>
                                    <div class="summernote">
                                        <h6>Upload File Pendukung.</h6>
                                        <input type="file" name="path" class="filestyle" data-buttonname="btn-white">
                                        <p>
                                            End of air-mode area
                                        </p>

                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary waves-effect waves-light w-md m-b-30">Send</button>
                    </div>
                    </form>
                </div>
            </div>

            <!-- End row -->



        </div> <!-- end Col-9 -->

    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/ubolts/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
@endpush
