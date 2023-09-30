
<!DOCTYPE html>
<html lang="en">

<!-- Header -->
@include('layouts.landrick.header')
<!-- End Header -->

<!-- Custom Css -->
@stack('css')
<!-- End Custom Css -->

<body>
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- Loader -->

<!-- Navbar STart -->
@include('layouts.landrick.navbar')
<!-- Navbar End -->

<!-- Hero Start -->
<section class="bg-half bg-light">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"> Carang Perusahaan </h4>
                            <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                                <li><a href="index.html" class="text-uppercase font-weight-bold text-dark">Beranda</a></li>
                                <li>
                                    <span class="text-uppercase text-primary font-weight-bold">Carang Perusahaan</span>
                                </li>
                            </ul>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </div>
    </div>
</section><!--end section-->
<!-- Hero End -->

<!-- Team Start -->
<section class="section bg-light">
    <section class="section pb-0">
        <!-- Start Blog -->
        <div class="container mt-50 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Cabang Perusahaan</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Kami <span class="text-primary font-weight-bold">Cipta Karsa Karya</span> mempunyai banyak cabang yang tersebar di seluruh indonesia.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                @foreach($cabang as $key => $record)
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="blog position-relative overflow-hidden shadow rounded">
                        <div class="position-relative">
                            @if($record->path != null)
                                <img src="{{ asset('pekerjaan/'. $record->path) }}" width="350" height="263" />
                            @else
                                <img src="{{ asset('assets/landrick/images/blog/01.jpg') }}" class="img-fluid rounded-top" alt="">
                            @endif
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="content p-4">
                            <h4><a href="javascript:void(0)" class="title text-dark">{{$record->name}}</a></h4>
                            <div class="post-meta mt-3">
{{--                                <a href="javascript:void(0)" class="text-muted float-right readmore">Read More <i class="mdi mdi-chevron-right"></i></a>--}}
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted like">{{$record->alamat}}</a></li><br>
                                    <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-muted like">{{$record->description}}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light user d-block"><i class="mdi mdi-account"></i> {{$record->user->name}}</small>
                            <small class="text-light date"><i class="mdi mdi-calendar-check"></i> {{ Carbon\Carbon::parse($record->created_at)->format('d M Y') }}</small>
                        </div>
                    </div>
                </div><!--end col-->
                @endforeach


            </div><!--end row-->
        </div><!--end container-->
    </section>
</section><!--end section-->
<!-- Team End -->

<!-- Footer Start -->
@include('layouts.landrick.footer')
<!-- Footer End -->

<!-- Back to top -->
<a href="#" class="back-to-top rounded text-center" id="back-to-top">
    <i class="mdi mdi-chevron-up d-block"> </i>
</a>
<!-- Back to top -->

<!-- javascript -->
@include('layouts.landrick.js')
<!-- End Js -->

<!-- Custom Js -->
@stack('js')
<!-- End Custom Js -->
</body>
</html>
