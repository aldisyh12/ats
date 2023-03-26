
<!DOCTYPE html>
<html lang="en">

<!-- Header -->
@include('layouts.landrick.header')
<!-- End Header -->

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
                            <h1 class="heading mb-3">Our Creativity Is Your <span class="text-primary">Success</span> </h1>
                            <p class="para-desc text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                            <div class="mt-4 pt-2">
                                <a href="page_contact_one.html" class="btn btn-primary mt-2 mr-2">Get Started</a>
                                <a href="documentation.html" class="btn btn-outline-primary mt-2">Documentation</a>
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
<section class="pt-5 pb-5 border-bottom border-top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-2 col-6 text-center">
                <img src="{{ asset('assets/landrick/images/client/1.png') }}" height="70" alt="">
            </div><!--end col-->

            <div class="col-lg-2 col-md-2 col-6 text-center">
                <img src="{{ asset('assets/landrick/images/client/2.png') }}" height="70" alt="">
            </div><!--end col-->

            <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0">
                <img src="{{ asset('assets/landrick/images/client/3.png') }}" height="70" alt="">
            </div><!--end col-->

            <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0">
                <img src="{{ asset('assets/landrick/images/client/4.png') }}" height="70" alt="">
            </div><!--end col-->

            <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0">
                <img src="{{ asset('assets/landrick/images/client/5.png') }}" height="70" alt="">
            </div><!--end col-->

            <div class="col-lg-2 col-md-2 col-6 text-center mt-4 mt-sm-0">
                <img src="{{ asset('assets/landrick/images/client/6.png') }}" height="70" alt="">
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Partners End -->

<!-- How It Work Start -->
<section class="section bg-light border-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-60">
                    <h4 class="main-title mb-4">How It Work ?</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <img src="{{ asset('assets/landrick/images/illustrator/SEO_SVG.svg') }}" alt="">
            </div><!--end col-->

            <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title ml-lg-5">
                    <h4 class="title mb-4">Change the way you build websites</h4>
                    <p class="text-muted">You can combine all the Landrick templates into a single one, you can take a component from the Application theme and use it in the Website.</p>
                    <ul class="list-unstyled feature-list text-muted">
                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Digital Marketing Solutions for Tomorrow</li>
                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Our Talented & Experienced Marketing Agency</li>
                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Create your own skin to match your brand</li>
                    </ul>
                    <a href="javascript:void(0)" class="mt-3 text-primary">Find Out More <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="section-title">
                    <h4 class="title mb-4">Speed up your development <br> with <span class="text-primary">Landrick.</span></h4>
                    <p class="text-muted">Using Landrick to build your site means never worrying about designing another page or cross browser compatibility. Our ever-growing library of components and pre-designed layouts will make your life easier.</p>
                    <ul class="list-unstyled feature-list text-muted">
                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Digital Marketing Solutions for Tomorrow</li>
                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Our Talented & Experienced Marketing Agency</li>
                        <li><i class="mdi mdi-checkbox-marked-circle text-success h4 mr-2"></i>Create your own skin to match your brand</li>
                    </ul>
                    <a href="javascript:void(0)" class="mt-3 text-primary">Find Out More <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div><!--end col-->

            <div class="col-lg-5 col-md-6 order-1 order-md-2">
                <div class="p-4 rounded bg-white feature-form border ml-lg-5">
                    <img src="{{ asset('assets/landrick/images/illustrator/Mobile_notification_SVG.svg') }}'" alt="">

                    <div class="content mt-4 pt-2">
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>Name : <span class="text-danger">*</span></label>
                                        <i class="mdi mdi-account ml-3 icons"></i>
                                        <input type="text" class="form-control pl-5" placeholder="Name" name="name" required="">
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>Email : <span class="text-danger">*</span></label>
                                        <i class="mdi mdi-email ml-3 icons"></i>
                                        <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>Password : <span class="text-danger">*</span></label>
                                        <i class="mdi mdi-key ml-3 icons"></i>
                                        <input type="password" class="form-control pl-5" placeholder="Password" required="">
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12 mt-3 mb-0">
                                    <button class="btn btn-primary w-100">Download</button>
                                </div><!--end col-->
                            </div>
                        </form>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- How It Work End -->

<!-- FAQ n Contact Start -->
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="faq-container">
                    <h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i> How our <span class="text-primary">Landrick</span> work ?</h4>
                    <p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts.</p>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="faq-container">
                    <h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i> What is the main process open account ?</h4>
                    <p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact</p>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="faq-container">
                    <h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i> How to make unlimited data entry ?</h4>
                    <p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">Furthermore, it is advantageous when the dummy text is relatively realistic so that the layout impression of the final publication is not compromised.</p>
                </div>
            </div><!--end col-->

            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="faq-container">
                    <h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i> Is <span class="text-primary">Landrick</span> safer to use with my account ?</h4>
                    <p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row mt-md-5 pt-md-3 mt-4 pt-2 mt-sm-0 pt-sm-0 justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h4 class="main-title mb-4">Have Question ? Get in touch!</h4>
                    <p class="text-muted para-desc mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    <a href="page_contact_two.html" class="btn btn-primary mt-4">Contact us <i class="mdi mdi-arrow-right"></i></a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
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
</body>
</html>
