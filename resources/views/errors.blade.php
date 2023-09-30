
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Cipta Karsa Karya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Shreethemes" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/logo.jpeg') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/landrick/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{ asset('assets/landrick/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Main css -->
    <link href="{{ asset('assets/landrick/css/style.css') }}" rel="stylesheet" type="text/css" />
</head>

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

<div class="back-to-home rounded d-none d-sm-block">
    <a href="{{ route('home') }}" class="text-white rounded d-inline-block text-center"><i class="mdi mdi-home"></i></a>
</div>

<!-- ERROR PAGE -->
<section class="bg-home">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12 text-center">
                        <img src="{{ asset('assets/landrick/images/404.png') }}" class="img-fluid" alt="">
                        <div class="text-uppercase mt-4 display-3">Oh ! no</div>
                        <div class="text-capitalize text-dark mb-4 error-page">Page Not Found</div>
                        <p class="text-muted para-desc mx-auto"><span class="text-primary font-weight-bold">Halaman</span> Yang Anda Cari Tidak Dapat Ditemukan.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
{{--                        <a href="index.html" class="btn btn-outline-primary mt-4">Go Back</a>--}}
                        <a href="{{ route('home') }}" class="btn btn-primary mt-4 ml-2">Kembali Ke Beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ERROR PAGE -->

<!-- javascript -->
<script src="{{ asset('assets/landrick/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/landrick/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/landrick/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/landrick/js/scrollspy.min.js') }}"></script>
<!-- Main Js -->
<script src="{{ asset('assets/landrick/js/app.js') }}"></script>
</body>
</html>
