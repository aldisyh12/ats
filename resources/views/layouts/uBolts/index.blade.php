<!DOCTYPE html>
<html>

@include('layouts.uBolts.header')

@stack('css')


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    @include('layouts.uBolts.navbar')
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    @include('layouts.uBolts.sidebar')
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                @yield('content')
                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
            © 2016. All rights reserved.
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->



<script>
    var resizefunc = [];
</script>

@include('layouts.uBolts.js')

@stack('js')

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
