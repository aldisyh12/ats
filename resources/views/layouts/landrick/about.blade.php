
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
                            <h4 class="title"> Tentang Kami </h4>
                            <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                                <li><a href="index.html" class="text-uppercase font-weight-bold text-dark">Beranda</a></li>
                                <li>
                                    <span class="text-uppercase text-primary font-weight-bold">Tentang Kami</span>
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

<!-- About Start -->
{{--<section class="section">--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-center">--}}
{{--            <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">--}}
{{--                <div class="position-relative">--}}
{{--                    <img src="images/about.jpg" class="rounded img-fluid mx-auto d-block" alt="">--}}
{{--                    <div class="play-icon">--}}
{{--                        <a href="http://vimeo.com/287684225" class="play-btn video-play-icon">--}}
{{--                            <i class="mdi mdi-play text-primary rounded-pill bg-white shadow"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">--}}
{{--                <div class="section-title ml-lg-4">--}}
{{--                    <h4 class="title mb-4">Our Story</h4>--}}
{{--                    <p class="text-muted">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect. Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet available. Dummy texts have been in use by typesetters since the 16th century.</p>--}}
{{--                    <a href="javascript:void(0)" class="btn btn-primary mt-3">Buy Now <i class="mdi mdi-chevron-right"></i></a>--}}
{{--                </div>--}}
{{--            </div><!--end col-->--}}
{{--        </div><!--end row-->--}}
{{--    </div><!--end container-->--}}

{{--    <div class="container mt-100 mt-60">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-12 text-center">--}}
{{--                <div class="section-title mb-4 pb-2">--}}
{{--                    <h4 class="main-title mb-4">Key Features</h4>--}}
{{--                    <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>--}}
{{--                </div>--}}
{{--            </div><!--end col-->--}}
{{--        </div><!--end row-->--}}

{{--        <div class="row">--}}
{{--            <div class="col-lg-4 col-md-6 mt-4 pt-2">--}}
{{--                <div class="key-feature d-flex p-3 rounded shadow bg-white">--}}
{{--                    <div class="icon text-center rounded-pill mr-3">--}}
{{--                        <i class="mdi mdi-responsive text-primary"></i>--}}
{{--                    </div>--}}
{{--                    <div class="content mt-2">--}}
{{--                        <h4 class="title mb-0">Fully Responsive</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-4 col-md-6 mt-4 pt-2">--}}
{{--                <div class="key-feature d-flex p-3 rounded shadow bg-white">--}}
{{--                    <div class="icon text-center rounded-pill mr-3">--}}
{{--                        <i class="mdi mdi-internet-explorer text-primary"></i>--}}
{{--                    </div>--}}
{{--                    <div class="content mt-2">--}}
{{--                        <h4 class="title mb-0">Browser Compatibility</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-4 col-md-6 mt-4 pt-2">--}}
{{--                <div class="key-feature d-flex p-3 rounded shadow bg-white">--}}
{{--                    <div class="icon text-center rounded-pill mr-3">--}}
{{--                        <i class="mdi mdi-cryengine text-primary"></i>--}}
{{--                    </div>--}}
{{--                    <div class="content mt-2">--}}
{{--                        <h4 class="title mb-0">Retina Ready</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-4 col-md-6 mt-4 pt-2">--}}
{{--                <div class="key-feature d-flex p-3 rounded shadow bg-white">--}}
{{--                    <div class="icon text-center rounded-pill mr-3">--}}
{{--                        <i class="mdi mdi-bootstrap text-primary"></i>--}}
{{--                    </div>--}}
{{--                    <div class="content mt-2">--}}
{{--                        <h4 class="title mb-0">Based On Bootstrap 4</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-4 col-md-6 mt-4 pt-2">--}}
{{--                <div class="key-feature d-flex p-3 rounded shadow bg-white">--}}
{{--                    <div class="icon text-center rounded-pill mr-3">--}}
{{--                        <i class="mdi mdi-cube-outline text-primary"></i>--}}
{{--                    </div>--}}
{{--                    <div class="content mt-2">--}}
{{--                        <h4 class="title mb-0">Material Design Icon</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-4 col-md-6 mt-4 pt-2">--}}
{{--                <div class="key-feature d-flex p-3 rounded shadow bg-white">--}}
{{--                    <div class="icon text-center rounded-pill mr-3">--}}
{{--                        <i class="mdi mdi-sass text-primary"></i>--}}
{{--                    </div>--}}
{{--                    <div class="content mt-2">--}}
{{--                        <h4 class="title mb-0">Built With SASS</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-4 col-md-6 mt-4 pt-2">--}}
{{--                <div class="key-feature d-flex p-3 rounded shadow bg-white">--}}
{{--                    <div class="icon text-center rounded-pill mr-3">--}}
{{--                        <i class="mdi mdi-check-decagram text-primary"></i>--}}
{{--                    </div>--}}
{{--                    <div class="content mt-2">--}}
{{--                        <h4 class="title mb-0">W3c Valid Code</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-4 col-md-6 mt-4 pt-2">--}}
{{--                <div class="key-feature d-flex p-3 rounded shadow bg-white">--}}
{{--                    <div class="icon text-center rounded-pill mr-3">--}}
{{--                        <i class="mdi mdi-vector-bezier text-primary"></i>--}}
{{--                    </div>--}}
{{--                    <div class="content mt-2">--}}
{{--                        <h4 class="title mb-0">Flaticon Icon</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-4 col-md-6 mt-4 pt-2">--}}
{{--                <div class="key-feature d-flex p-3 rounded shadow bg-white">--}}
{{--                    <div class="icon text-center rounded-pill mr-3">--}}
{{--                        <i class="mdi mdi-settings-outline text-primary"></i>--}}
{{--                    </div>--}}
{{--                    <div class="content mt-2">--}}
{{--                        <h4 class="title mb-0">Easy to customize</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!--end col-->--}}
{{--        </div><!--end row-->--}}

{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-12 text-center mt-4 pt-2">--}}
{{--                <a href="javascript:void(0)" class="btn btn-primary">See More <i class="mdi mdi-arrow-right"></i></a>--}}
{{--            </div><!--end col-->--}}
{{--        </div><!--end row-->--}}
{{--    </div><!--end container-->--}}
{{--</section><!--end section-->--}}
<!-- About End -->

<!-- Team Start -->
<section class="section bg-light">
    <div class="container">


        <div class="container mb-100 mb-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="main-title mb-4">Sejarah Perusahaan</h4>
{{--                            <p class="text-muted para-desc mx-auto mb-0">Mulai mencari kerja dengan <span class="text-primary font-weight-bold">CariKerja</span> yang dapat menghubungkan anda dengan pekerjaan terbaik.</p>--}}
                            <p class="text-muted mx-auto mb-0"><span class="text-primary font-weight-bold">PT Cipta Karsa Karya</span> berdiri pada tahun 2014 sebagai perusahaan yang bergerak di bidang jasa konsultasi konstruksi guna mendukung berbagai kegiatan proyek di Indonesia. Seiring dengan perkembangan waktu maka inti bisnis berubah menjadi perusahaan yang bergerak di bidang sewa alat survey sipil transportasi, software serta pengolahan data hasil survey, serta menyediakan sewa untuk kendaraan roda empat, roda dua dan alat-alat perkantoran. Di samping itu juga PT Cipta Karsa Karya telah dipercaya oleh beberapa perusahaan berskala nasional dan internasional untuk melakukan pekerjaan dengan handal dan profesional, ini semua adalah hasil dari kerja keras PT Cipta Karsa Karya selama bertahun-tahun.
                            </p>
                        </div>
                    </div><!--end col-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="main-title mb-4">Visi</h4>
{{--                    <p class="text-muted para-desc mx-auto mb-0">Mulai mencari kerja dengan <span class="text-primary font-weight-bold">CariKerja</span> yang dapat menghubungkan anda dengan pekerjaan terbaik.</p>--}}
                    <p class="text-muted mx-auto mb-0">Rumusan Visi dan Misi  <span class="text-primary font-weight-bold">PT Cipta Karsa Karya</span> mengacu pada memberikan pelayanan terbaik, dengan fokus pada tugas pokok dan fungsi yang telah ditetapkan, maka visi PT Cipta Karsa Karya sebagai berikut: “Menjadi Perusahaan Penyewaan Alat, Software dan Pengolahan Data dengan pelayanan terbaik.”
                        Visi ini mengandung arti bahwa perusahaan telah, sedang, dan akan dilakukan oleh perusahaan yang bergerak dibidang jasa konsultasi konstruksi guna mendukung berbagai kegiatan proyek di Indonesia.
                    </p>
                    <h4 class="main-title mb-4 mt-4">Misi</h4>
                    {{--                    <p class="text-muted para-desc mx-auto mb-0">Mulai mencari kerja dengan <span class="text-primary font-weight-bold">CariKerja</span> yang dapat menghubungkan anda dengan pekerjaan terbaik.</p>--}}
                    <p class="text-muted mx-auto mb-0">Untuk mencapai visi yang telah ditetapkan, <span class="text-primary font-weight-bold">PT Cipta Karsa Karya</span> mempunyai misi yang harus dilaksanakan agar tujuan dapat terlaksana dan berhasil dengan baik. Misi tersebut adalah: “Membangun usaha yang berorientasi pada efisiensi dan efektivitas serta kepuasan klien” “Memberikan pelayanan yang terbaik kepada pelanggan dalam semua kebutuhan instrumen survey dengan memperhatikan anggaran yang tersedia untuk menjadi solusi dalam setiap proyek atau pekerjaan”.
                    </p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h4 class="title mb-4">Lihat semua fitur yang ditawarkan oleh kami.</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Dengan fitur yang terdapat pada <span class="text-primary font-weight-bold">CariKerja</span> anda dengan mudah memilih pekerjaan impian anda.</p>

                    <div class="mt-3">
                        <a href="{{ route('user.form.register') }}" class="btn btn-primary mt-2 mr-2">Daftar Sekarang</a>
                        <a href="{{ route('admin.form.login') }}" class="btn btn-outline-primary mt-2">Login</a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
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
