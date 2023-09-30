@extends('layouts.uBolts.index-user')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/ubolts/assets/plugins/magnific-popup/css/magnific-popup.css') }}"/>
    <style>
        .child {
            /* Pusatkan secara vertikal dan horizontal */
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
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
{{--                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>--}}
{{--                    <ul class="dropdown-menu drop-menu-right" role="menu">--}}
{{--                        <li><a href="#">Action</a></li>--}}
{{--                        <li><a href="#">Another action</a></li>--}}
{{--                        <li><a href="#">Something else here</a></li>--}}
{{--                        <li class="divider"></li>--}}
{{--                        <li><a href="#">Separated link</a></li>--}}
{{--                    </ul>--}}
                </div>

                <h4 class="page-title">List Pekerjaan Yang Sudah Dilamar</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Pekejaan</a></li>
                    <li class="active">List Pekerjaan</li>
                </ol>
            </div>
        </div>

        <!-- SECTION FILTER
        ================================================== -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="portfolioFilter">
                    <a href="#" data-filter="*" class="current">All</a>
                    @foreach($categoryList as $key => $value)
                        <a href="#" data-filter=".{{$value->id}}">{{ $value->name }}</a>
                    @endforeach
                    {{--                <a href="#" data-filter=".webdesign">Web Design</a>--}}
                    {{--                <a href="#" data-filter=".graphicdesign">Graphic Design</a>--}}
                    {{--                <a href="#" data-filter=".illustrator">Illustrator</a>--}}
                    {{--                <a href="#" data-filter=".photography">Photography</a>--}}
                </div>
            </div>
        </div>

        <div class="row port">
            <div class="portfolioContainer">
                @foreach($record as $key => $value)
                    <div class="col-sm-6 col-lg-3 col-md-4 {{ $value->job->category->id ?? '-' }}">
                        <div class="gal-detail thumb">
                            @if($value->job->file != null)
                                <a href="{{ asset('pekerjaan/'. $value->job->file->path) }}" class="image-popup" title="Screenshot-1">
                                    @else
                                        <a href="{{ asset('pekerjaan/'. $value->job->file->path) }}" class="image-popup" title="Screenshot-1">
                                            @endif
                                            @if($value->job->file != null)
                                                <img src="{{ asset('pekerjaan/'. $value->job->file->path) }}" width="600" height="265" class="thumb-img" alt="work-thumbnail">
                                            @else
                                                <img src="{{ asset('assets/ubolts/assets/images/gallery/2.jpg') }}" class="thumb-img" alt="work-thumbnail">
                                            @endif
                                        </a>
                                        @if($value->status == 0)
                                            <h4>{{ $value->job->job_header ?? '-' }} &nbsp; <button class="btn btn-sm btn-secondary">Menunggu</button></h4>
                                        @elseif($value->status == 1)
                                            <h4>{{ $value->job->job_header ?? '-' }} &nbsp; <button class="btn btn-sm btn-primary">Diterima</button></h4>
                                        @elseif($value->status == 2)
                                            <h4>{{ $value->job->job_header ?? '-' }} &nbsp; <button class="btn btn-sm btn-danger">Ditolak</button></h4>
                                        @endif
                                        <h6>kategori : {{ $value->job->category->name ?? '-' }}</h6>
                                        <h6>Melamar pada - {{ $value->date ?? '-' }}</h6>
                        </div>
                    </div>
                @endforeach

            </div>
        </div> <!-- End row -->
    @endif
@endsection

@push('js')
    <script type="text/javascript" src="{{ asset('assets/ubolts/assets/plugins/isotope/js/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/ubolts/assets/plugins/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>

    <script type="text/javascript">
        $(window).load(function(){
            var $container = $('.portfolioContainer');
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });

            $('.portfolioFilter a').click(function(){
                $('.portfolioFilter .current').removeClass('current');
                $(this).addClass('current');

                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });
                return false;
            });
        });
        $(document).ready(function() {
            $('.image-popup').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-fade',
                gallery: {
                    enabled: false,
                    navigateByImgClick: true,
                    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                }
            });
        });
    </script>
@endpush
