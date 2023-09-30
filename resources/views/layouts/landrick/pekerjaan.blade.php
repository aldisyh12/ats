
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
                            <h4 class="title"> Pekerjaan / Lowongan </h4>
                            <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                                <li><a href="index.html" class="text-uppercase font-weight-bold text-dark">Beranda</a></li>
                                <li>
                                    <span class="text-uppercase text-primary font-weight-bold">Pekerjaan</span>
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

<!-- Job List Start -->
<section class="section">
    <div class="container">
        <div class="row border-bottom">
            <div class="col-lg-9 col-md-8">
                <div class="section-title">
                    <h4 class="title mb-2">Semua Pekerjaan</h4>
                    <p class="text-muted mb-0">Pekerjaan Yang Tersedia</p>
                </div>
            </div><!--end col-->

{{--            <div class="col-lg-3 col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">--}}
{{--                <div class="form custom-form">--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Types of jobs :</label>--}}
{{--                        <select class="form-control" id="Sortbylist-Shop">--}}
{{--                            <option>All Jobs</option>--}}
{{--                            <option>Full Time</option>--}}
{{--                            <option>Half Time</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!--end col-->--}}
        </div><!--end row-->

        <div class="row">
            <div class="col-12 mt-4 pt-2">
                <div class="section-title">
                    <h5 class="mb-0">Rekomendasi Pekerjaan :</h5>
                </div>
            </div><!--end col-->

            @foreach($job as $key => $value)
            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="job-content p-4 border rounded position-relative overflow-hidden">
                    <div class="head pb-3 border-bottom">
                        <ul class="list-unstyled mb-0">
                            <li class="list-inline-item time float-right text-muted"><i class="mdi mdi-clock-outline"></i>
                                {{ Carbon\Carbon::parse($value->created_at)->format('d-m-Y') }}</li>
                            <li class="list-inline-item text-success">Full Time</li>
                        </ul>
                        <h4><a href="page_job_detail.html" class="text-dark title">{{ $value->job_header }}</a></h4>
                        <p class="mb-2 h6 text-info">Kategori: <a href="javascript:void(0)" class="h6 text-dark firm">{{ $value->category->name }}.</a></p>
                        <p class="mb-0"><a href="javascript:void(0)" class="text-muted place">Indonesia, jakarta</a></p>
                    </div>
                    <ul class="job-facts pt-3 list-unstyled">
                        <li class="list-inline-item text-muted"><i class="mdi mdi-check text-success mr-1"></i> {{ $value->pengalaman ?? '-' }} Tahun</li><br>
{{--                        <li class="list-inline-item text-muted"><i class="mdi mdi-check text-success mr-1"></i> Working Hours- 6hr</li>--}}
                        <li class="list-inline-item text-muted"><i class="mdi mdi-check text-success mr-1"></i> {{ $value->jabatan ?? '-' }}</li>
                    </ul>
                    <a href="{{ route('admin.form.login') }}" class="btn btn-outline-primary btn-block">Lamar Sekarang</a>
                </div>
            </div><!--end col-->
            @endforeach
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Job List End -->

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
