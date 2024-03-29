<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{ asset('assets/logo.jpeg') }}">

    <title>Cipta Karsa Karya</title>

    <link href="{{ asset('assets/ubolts/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/ubolts/assets/css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/ubolts/assets/css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/ubolts/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/ubolts/assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/ubolts/assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{ asset('assets/ubolts/assets/js/modernizr.min.js') }}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">

</head>
<body>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class=" card-box">
        <div class="panel-heading">
            <h3 class="text-center">Daftar Ke <strong class="text-custom">Cipta Karsa Karya</strong> </h3>
        </div>

        <div class="panel-body">
            <form class="form-horizontal m-t-20" action="{{ route('user.register') }}" method="POST">
                @csrf

                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" name="email" type="email" required="" placeholder="Email" />
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" name="name" type="text" required="" placeholder="Username" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" name="password" type="password" required="" placeholder="Password" />
                    </div>
                </div>

{{--                <div class="form-group">--}}
{{--                    <div class="col-xs-12">--}}
{{--                        <div class="checkbox checkbox-primary">--}}
{{--                            <input id="checkbox-signup" type="checkbox" checked="checked">--}}
{{--                            <label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
                            Daftar
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 text-center">
            <p>
                Sudah Punya Akun?<a href="{{ route('admin.form.login') }}" class="text-primary m-l-5"><b>Masuk</b></a>
            </p>
        </div>
    </div>

</div>

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('assets/ubolts/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/ubolts/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/ubolts/assets/js/detect.js') }}"></script>
<script src="{{ asset('assets/ubolts/assets/js/fastclick.js') }}"></script>
<script src="{{ asset('assets/ubolts/assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/ubolts/assets/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('assets/ubolts/assets/js/waves.js') }}"></script>
<script src="{{ asset('assets/ubolts/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/ubolts/assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('assets/ubolts/assets/js/jquery.scrollTo.min.js') }}"></script>


<script src="{{ asset('assets/ubolts/assets/js/jquery.core.js') }}"></script>
<script src="{{ asset('assets/ubolts/assets/js/jquery.app.js') }}"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });

        $(".knob").knob();

    });
</script>

@if(Session::has('success'))
    <script>
        swal("Berhasil", "{!!Session::get('success')!!}", "success", {
            button: "OK",
        });
    </script>
@endif

@if(Session::has('error'))
    <script>
        swal("Gagal", "{!!Session::get('error')!!}", "error", {
            button: "OK",
        });
    </script>
@endif

</body>
</html>
