<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="index.html">Cipta Karsa Karya<span class="text-primary"></span></a>
        </div>
        <div class="buy-button">
            <a href="{{ route('admin.form.login') }}" target="_blank" class="btn btn-outline-primary">Login</a>
            <a href="{{ route('user.form.register') }}" target="_blank" class="btn btn-primary">Daftar Sekarang</a>
        </div><!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li><a href="{{ route('pekerjaan') }}">Pekerjaan</a></li>
                <li><a href="{{ route('cabang') }}">Cabang</a></li>
                <li><a href="{{ route('aboutus') }}">Tentang Kami</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header>
