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
{{--    @if($cv->is_new == 1)--}}
{{--        <div class="row child">--}}
{{--            <div class="col-lg-12 col-md-8">--}}
{{--                <div class="container">--}}
{{--                    <div class="m-t-30 m-b-30 text-center">--}}
{{--                        <a href="{{ route('user.profile-create', auth()->user()->id) }}" class="btn btn-default waves-effect waves-light">Anda belum melengkapi profile</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @else--}}
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

            <h4 class="page-title">List Pekerjaan</h4>
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
                @foreach($categoryList as $key => $record)
                <a href="#" data-filter=".{{$record->id}}">{{ $record->name }}</a>
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
            @foreach($jobList as $key => $record)
            <div class="col-sm-6 col-lg-3 col-md-4 {{ $record->category->id }}">
                <div class="gal-detail thumb">
                        @if($record->file != null)
                        <a href="{{ asset('pekerjaan/'. $record->file->path) }}" class="image-popup" title="Screenshot-1">
                        @else
                        <a href="{{ asset('assets/ubolts/assets/images/gallery/1.jpg') }}" class="image-popup" title="Screenshot-1">
                        @endif
                        @if($record->file != null)
                        <img src="{{ asset('pekerjaan/'. $record->file->path) }}" width="600" height="265" class="thumb-img" alt="work-thumbnail">
                        @else
                            <img src="{{ asset('assets/ubolts/assets/images/gallery/2.jpg') }}" class="thumb-img" alt="work-thumbnail">
                        @endif
                    </a>
                    <h4>Judul : {{ $record->job_header }}</h4>
                    <h6>kategori : {{ $record->category->name }}</h6>
                    <h6>Dibuat : {{ $record->date }}</h6>
                    <h6>
                        <a href="{{ route('user.job.detail', $record->id) }}" class="btn btn-outline-primary">Detail Pekerjaan</a>
{{--                        <a href="{{ route('user.job.detail', $record->id) }}" class="btn btn-outline-primary">Lamar Pekerjaan</a>--}}
                    </h6>
                </div>
            </div>
            @endforeach

{{--            <div class="col-sm-6 col-lg-3 col-md-4 graphicdesign illustrator photography">--}}
{{--                <div class="gal-detail thumb">--}}
{{--                    <a href="{{ asset('assets/ubolts/assets/images/gallery/2.jpg') }}" class="image-popup" title="Screenshot-2">--}}
{{--                        <img src="{{ asset('assets/ubolts/assets/images/gallery/2.jpg') }}" class="thumb-img" alt="work-thumbnail">--}}
{{--                    </a>--}}
{{--                    <h4>Gallary Image</h4>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-sm-6 col-lg-3 col-md-4 webdesign graphicdesign">--}}
{{--                <div class="gal-detail thumb">--}}
{{--                    <a href="{{ asset('assets/ubolts/assets/images/gallery/3.jpg') }}" class="image-popup" title="Screenshot-3">--}}
{{--                        <img src="{{ asset('assets/ubolts/assets/images/gallery/3.jpg') }}" class="thumb-img" alt="work-thumbnail">--}}
{{--                    </a>--}}
{{--                    <h4>Gallary Image</h4>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-sm-6 col-lg-3 col-md-4 illustrator photography">--}}
{{--                <div class="gal-detail thumb">--}}
{{--                    <a href="{{ asset('assets/ubolts/assets/images/gallery/4.jpg') }}" class="image-popup" title="Screenshot-4">--}}
{{--                        <img src="{{ asset('assets/ubolts/assets/images/gallery/4.jpg') }}" class="thumb-img" alt="work-thumbnail">--}}
{{--                    </a>--}}
{{--                    <h4>Gallary Image</h4>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-sm-6 col-lg-3 col-md-4 graphicdesign photography">--}}
{{--                <div class="gal-detail thumb">--}}
{{--                    <a href="{{ asset('assets/ubolts/assets/images/gallery/5.jpg') }}" class="image-popup" title="Screenshot-5">--}}
{{--                        <img src="{{ asset('assets/ubolts/assets/images/gallery/5.jpg') }}" class="thumb-img" alt="work-thumbnail">--}}
{{--                    </a>--}}
{{--                    <h4>Gallary Image</h4>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-sm-6 col-lg-3 col-md-4 webdesign photography">--}}
{{--                <div class="gal-detail thumb">--}}
{{--                    <a href="{{ asset('assets/ubolts/assets/images/gallery/6.jpg') }}" class="image-popup" title="Screenshot-6">--}}
{{--                        <img src="{{ asset('assets/ubolts/assets/images/gallery/6.jpg') }}" class="thumb-img" alt="work-thumbnail">--}}
{{--                    </a>--}}
{{--                    <h4>Gallary Image</h4>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-sm-6 col-lg-3 col-md-4 illustrator photography graphicdesign">--}}
{{--                <div class="gal-detail thumb">--}}
{{--                    <a href="{{ asset('assets/ubolts/assets/images/gallery/7.jpg') }}" class="image-popup" title="Screenshot-7">--}}
{{--                        <img src="{{ asset('assets/ubolts/assets/images/gallery/7.jpg') }}" class="thumb-img" alt="work-thumbnail">--}}
{{--                    </a>--}}
{{--                    <h4>Gallary Image</h4>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-sm-6 col-lg-3 col-md-4 graphicdesign photography webdesign">--}}
{{--                <div class="gal-detail thumb">--}}
{{--                    <a href="{{ asset('assets/ubolts/assets/images/gallery/8.jpg') }}" class="image-popup" title="Screenshot-8">--}}
{{--                        <img src="{{ asset('assets/ubolts/assets/images/gallery/8.jpg') }}" class="thumb-img" alt="work-thumbnail">--}}
{{--                    </a>--}}
{{--                    <h4>Gallary Image</h4>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-sm-6 col-lg-3 col-md-4 webdesign illustrator">--}}
{{--                <div class="gal-detail thumb">--}}
{{--                    <a href="{{ asset('assets/ubolts/assets/images/gallery/9.jpg') }}" class="image-popup" title="Screenshot-9">--}}
{{--                        <img src="{{ asset('assets/ubolts/assets/images/gallery/9.jpg') }}" class="thumb-img" alt="work-thumbnail">--}}
{{--                    </a>--}}
{{--                    <h4>Gallary Image</h4>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-sm-6 col-lg-3 col-md-4 photography graphicdesign">--}}
{{--                <div class="gal-detail thumb">--}}
{{--                    <a href="{{ asset('assets/ubolts/assets/images/gallery/10.jpg') }}" class="image-popup" title="Screenshot-10">--}}
{{--                        <img src="{{ asset('assets/ubolts/assets/images/gallery/10.jpg') }}" class="thumb-img" alt="work-thumbnail">--}}
{{--                    </a>--}}
{{--                    <h4>Gallary Image</h4>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-sm-6 col-lg-3 col-md-4 graphicdesign photography">--}}
{{--                <div class="gal-detail thumb">--}}
{{--                    <a href="{{ asset('assets/ubolts/assets/images/gallery/11.jpg') }}" class="image-popup" title="Screenshot-11">--}}
{{--                        <img src="{{ asset('assets/ubolts/assets/images/gallery/11.jpg') }}" class="thumb-img" alt="work-thumbnail">--}}
{{--                    </a>--}}
{{--                    <h4>Gallary Image</h4>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-sm-6 col-lg-3 col-md-4 webdesign graphicdesign illustrator">--}}
{{--                <div class="gal-detail thumb">--}}
{{--                    <a href="{{ asset('assets/ubolts/assets/images/gallery/12.jpg') }}" class="image-popup" title="Screenshot-12">--}}
{{--                        <img src="{{ asset('assets/ubolts/assets/images/gallery/12.jpg') }}" class="thumb-img" alt="work-thumbnail">--}}
{{--                    </a>--}}
{{--                    <h4>Gallary Image</h4>--}}
{{--                </div>--}}
{{--            </div>--}}



        </div>
    </div> <!-- End row -->
{{--    @endif--}}
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
