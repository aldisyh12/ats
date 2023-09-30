
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
<section class="bg-half-170" id="home">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7">
                        <div class="title-heading mt-4">
                            <h1 class="heading mb-3">Temukan pekerjaan impianmu bersama <span class="text-primary">Cipta Karsa Karya</span> </h1>
                            <p class="para-desc text-muted">Kami memudahkanmu menemukan pekerjaan terbaik.</p>
                            <div class="mt-4 pt-2">
                                <a href="{{ route('user.form.register') }}" class="btn btn-primary mt-2 mr-2">Daftar Sekarang</a>
                                <a href="{{ route('admin.form.login') }}" class="btn btn-outline-primary mt-2">Login</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <img src="{{ asset('assets/landrick/images/illustrator/Startup_SVG.svg') }}" alt="">
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div><!--end home desc center-->
    </div><!--end home center-->
</section><!--end section-->
<!-- Hero End -->

<!-- Partners start -->
{{--<section class="pt-5 pb-5 border-bottom border-top">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-2 col-md-2 col-6 text-center">--}}
{{--                <img src="{{ asset('assets/landrick/images/client/1.png') }}" height="70" alt="">--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-2 col-md-2 col-6 text-center">--}}
{{--                <img src="{{ asset('assets/landrick/images/client/2.png') }}" height="70" alt="">--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0">--}}
{{--                <img src="{{ asset('assets/landrick/images/client/3.png') }}" height="70" alt="">--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0">--}}
{{--                <img src="{{ asset('assets/landrick/images/client/4.png') }}" height="70" alt="">--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0">--}}
{{--                <img src="{{ asset('assets/landrick/images/client/5.png') }}" height="70" alt="">--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0">--}}
{{--                <img src="{{ asset('assets/landrick/images/client/6.png') }}" height="70" alt="">--}}
{{--            </div><!--end col-->--}}
{{--        </div><!--end row-->--}}
{{--    </div><!--end container-->--}}
{{--</section><!--end section-->--}}
<!-- Partners End -->

<!-- How It Work Start -->
<section class="section bg-light border-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-60">
                    <h4 class="main-title mb-4">Susah Dapat Pekerjaan ?</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Tenang saja di situs <span class="text-primary font-weight-bold">Cipta Karsa Karya</span> kamu dapat menemukan pekerjaan impianmu dengan mudah, progress yang cepat dan banyaknya lowongan pekerjaan dapat memudahkanmu menemukan pekerjaan terbaik.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <img src="{{ asset('assets/landrick/images/illustrator/SEO_SVG.svg') }}" alt="">
            </div><!--end col-->

            <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title ml-lg-5">
                    <h4 class="title mb-4">Tips agar kamu cepat mendapatkan pekerjaan</h4>
                    <p class="text-muted">Kamu hanya perlu melengkapi data profilemu lalu upload cvmu, dengan bertambahnya skor kamu, perusahaanpun akan cepat melirik lamaran kamu loh.</p>
                    <ul class="list-unstyled feature-list text-muted">
                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>isi Profile tentang Data Diri</li>
                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Lengkapi Semua Yang Dibutuhkan & Upload Cv Kamu</li>
                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Tinggal Cari Pekerjaan Impian Deh</li>
                    </ul>
                    <a href="javascript:void(0)" class="mt-3 text-primary">Cari Tahu Lebih Lanjut <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

{{--    <div class="container mt-100 mt-60">--}}
{{--        <div class="row align-items-center">--}}
{{--            <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">--}}
{{--                <div class="section-title">--}}
{{--                    <h4 class="title mb-4">Speed up your development <br> with <span class="text-primary">Landrick.</span></h4>--}}
{{--                    <p class="text-muted">Using Landrick to build your site means never worrying about designing another page or cross browser compatibility. Our ever-growing library of components and pre-designed layouts will make your life easier.</p>--}}
{{--                    <ul class="list-unstyled feature-list text-muted">--}}
{{--                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Digital Marketing Solutions for Tomorrow</li>--}}
{{--                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Our Talented & Experienced Marketing Agency</li>--}}
{{--                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Create your own skin to match your brand</li>--}}
{{--                    </ul>--}}
{{--                    <a href="javascript:void(0)" class="mt-3 text-primary">Find Out More <i class="mdi mdi-chevron-right"></i></a>--}}
{{--                </div>--}}
{{--            </div><!--end col-->--}}

{{--            <div class="col-lg-5 col-md-6 order-1 order-md-2">--}}
{{--                <div class="p-4 rounded bg-white feature-form border ml-lg-5">--}}
{{--                    <img src="{{ asset('assets/landrick/images/illustrator/Mobile_notification_SVG.svg') }}'" alt="">--}}

{{--                    <div class="content mt-4 pt-2">--}}
{{--                        <form>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-12">--}}
{{--                                    <div class="form-group position-relative">--}}
{{--                                        <label>Name : <span class="text-danger">*</span></label>--}}
{{--                                        <i class="mdi mdi-account ml-3 icons"></i>--}}
{{--                                        <input type="text" class="form-control pl-5" placeholder="Name" name="name" required="">--}}
{{--                                    </div>--}}
{{--                                </div><!--end col-->--}}

{{--                                <div class="col-lg-12">--}}
{{--                                    <div class="form-group position-relative">--}}
{{--                                        <label>Email : <span class="text-danger">*</span></label>--}}
{{--                                        <i class="mdi mdi-email ml-3 icons"></i>--}}
{{--                                        <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">--}}
{{--                                    </div>--}}
{{--                                </div><!--end col-->--}}

{{--                                <div class="col-lg-12">--}}
{{--                                    <div class="form-group position-relative">--}}
{{--                                        <label>Password : <span class="text-danger">*</span></label>--}}
{{--                                        <i class="mdi mdi-key ml-3 icons"></i>--}}
{{--                                        <input type="password" class="form-control pl-5" placeholder="Password" required="">--}}
{{--                                    </div>--}}
{{--                                </div><!--end col-->--}}

{{--                                <div class="col-lg-12 mt-3 mb-0">--}}
{{--                                    <button class="btn btn-primary w-100">Download</button>--}}
{{--                                </div><!--end col-->--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!--end col-->--}}
{{--        </div><!--end row-->--}}
{{--    </div>--}}
    <!--end container-->
</section><!--end section-->
<!-- How It Work End -->

    <!-- Testi Start -->
    <section class="section pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-60">
                        <h4 class="main-title mb-4">Testimoni Dari Pengguna</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Cipta Karsa Karya</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-12">
                    <div id="customer-testi" class="owl-carousel owl-theme">

                        @foreach($penilaian as $key => $record)
                        <div class="customer-testi mr-2 ml-2 text-center p-4 rounded border">
                            @if($record->penilaian != null)
                                <img src="{{ asset('pekerjaan/'. $record->penilaian->path) }}" class="mx-auto" width="100" height="80" />
                            @else
                                <img src="{{ asset('assets/ubolts/assets/images/users/avatar-2.jpg') }}" class="mx-auto" width="100" height="105" alt="profile-image">
                            @endif
{{--                            <img src="{{ asset('assets/landrick/images/client/1.png') }}" class="mx-auto" alt="">--}}
                            <p class="text-muted mt-4">" {{ $record->description ?? '-' }}. "</p>
                            <h6 class="text-primary">- {{ $record->user->name ?? '-' }}</h6>
                        </div>
                        @endforeach

{{--                        <div class="customer-testi mr-2 ml-2 text-center p-4 rounded border">--}}
{{--                            <img src="{{ asset('assets/landrick/images/client/2.png') }}" class="mx-auto" alt="">--}}
{{--                            <p class="text-muted mt-4">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>--}}
{{--                            <h6 class="text-primary">- Carl Oliver</h6>--}}
{{--                        </div>--}}

{{--                        <div class="customer-testi mr-2 ml-2 text-center p-4 rounded border">--}}
{{--                            <img src="{{ asset('assets/landrick/images/client/3.png') }}" class="mx-auto" alt="">--}}
{{--                            <p class="text-muted mt-4">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>--}}
{{--                            <h6 class="text-primary">- Barbara McIntosh</h6>--}}
{{--                        </div>--}}

{{--                        <div class="customer-testi mr-2 ml-2 text-center p-4 rounded border">--}}
{{--                            <img src="{{ asset('assets/landrick/images/client/4.png') }}" class="mx-auto" alt="">--}}
{{--                            <p class="text-muted mt-4">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>--}}
{{--                            <h6 class="text-primary">- Jill Webb</h6>--}}
{{--                        </div>--}}

{{--                        <div class="customer-testi mr-2 ml-2 text-center p-4 rounded border">--}}
{{--                            <img src="{{ asset('assets/landrick/images/client/5.png') }}" class="mx-auto" alt="">--}}
{{--                            <p class="text-muted mt-4">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>--}}
{{--                            <h6 class="text-primary">- Dean Tolle</h6>--}}
{{--                        </div>--}}

{{--                        <div class="customer-testi mr-2 ml-2 text-center p-4 rounded border">--}}
{{--                            <img src="{{ asset('assets/landrick/images/client/6.png') }}" class="mx-auto" alt="">--}}
{{--                            <p class="text-muted mt-4">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>--}}
{{--                            <h6 class="text-primary">- Christa Smith</h6>--}}
{{--                        </div>--}}
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Testi End -->

<!-- FAQ n Contact Start -->
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="faq-container">
                    <h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i> Bagaimana caranya mencari pekerjaan di <span class="text-primary">Cipta Karsa Karya</span> ?</h4>
                    <p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">Mudah sekali anda hanya perlu membuat akun dan melengkapi profile pribadi agar dapat aktif mencari pekerjaan.</p>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="faq-container">
                    <h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i> Apakah mudah mendaftar di <span class="text-primary">Cipta Karsa Karya</span>  ?</h4>
                    <p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">Anda hanya perlu klik mendaftar dan lengkapi formulir yang ada</p>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="faq-container">
                    <h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i> Bagaimana caranya agar mudah diterima ?</h4>
                    <p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">lengkapi profile anda dan anda akan lebih mudah mendapatkan pekerjaan karena score anda meningkat.</p>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="faq-container">
                    <h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i> Apakah perlu membayar di <span class="text-primary">Cipta Karsa Karya</span> ?</h4>
                    <p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">Tidak perlu mencari pekerjaan di CariKerja sepenuhnya gratis.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

{{--        <div class="row mt-md-5 pt-md-3 mt-4 pt-2 mt-sm-0 pt-sm-0 justify-content-center">--}}
{{--            <div class="col-12 text-center">--}}
{{--                <div class="section-title">--}}
{{--                    <h4 class="main-title mb-4">Have Question ? Get in touch!</h4>--}}
{{--                    <p class="text-muted para-desc mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>--}}
{{--                    <a href="page_contact_two.html" class="btn btn-primary mt-4">Contact us <i class="mdi mdi-arrow-right"></i></a>--}}
{{--                </div>--}}
{{--            </div><!--end col-->--}}
{{--        </div><!--end row-->--}}
    </div><!--end container-->
    <div class="container-fluid">
        <div class="row">
            <div class="home-shape-bottom">
                <img src="{{ asset('assets/landrick/images/shapes/shape-dark.png') }}" alt="" class="img-fluid mx-auto d-block">
            </div>
        </div><!--end row-->
    </div> <!-- END CONTAINER -->
</section><!--end section-->
<!-- FAQ n Contact End -->

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
