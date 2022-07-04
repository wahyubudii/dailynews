<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="seo & digital marketing">
    <meta name="keywords" content="marketing,digital marketing,creative, agency, startup,promodise,onepage, clean, modern,seo,business, company">
    <meta name="author" content="Themefisher.com">

    <title>@yield('title')</title>
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}">
    <!-- Icofont Css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animate-css/animate.css') }}">
    <!-- Icofont -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icofont/icofont.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/customStyle.css') }}">
    @stack('css')
</head>


<body data-spy="scroll" data-target=".fixed-top">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('user') }}" style="width: 150px;">
                <img src="{{ asset('assets/images/logo.jpg') }}" alt="" class="img-fluid b-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link smoth-scroll" href="{{ route('user') }}'">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="{{ route('user') }}'">Ekonomi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="{{ route('user') }}'">Sepakbola</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="{{ route('user') }}'">Teknologi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="{{ route('user') }}'">Budaya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="{{ route('user') }}'">Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="{{ route('user') }}'">Kuliner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="{{ route('user') }}'">Hukum & Kriminal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="{{ route('user') }}'">Lainnya</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!--  FOOTER AREA START  -->
    <section id="footer" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-5 col-md-5">
                    <div class="footer-widget footer-link">
                        <h4>New News</h4>
                        <p>New News adalah sebuah platform berita online yang bekerja secara realtime, menggunakan Public API</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-md-3">
                    <div class="footer-widget footer-link">
                        <h4>Kategori</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Sepakbola</a></li>
                            <li><a href="#">Teknologi</a></li>
                            <li><a href="#">Budaya</a></li>
                            <li><a href="#">Wisata</a></li>
                            <li><a href="#">Kuliner</a></li>
                            <li><a href="#">Hukum & Kriminal</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-4 col-md-4">
                    <div class="footer-widget footer-text">
                        <h4>Our location</h4>
                        <p class="mail"><span>E-mail:</span> mkmdmmdricky@gmail.com</p>
                        <p><span>Phone :</span>+6285212515775</p>
                        <p><span>Location:</span>Jl. Raya Tlogomas. 246 Tlogomas Lowokwaru, Tegalgondo, Kec. Karang Ploso, Kota Malang, Jawa Timur 65144</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer-copy">
                        © 2022 M. Ricky. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  FOOTER AREA END  -->

    <!-- 
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Woow animtaion -->
    <script src="{{ asset('assets/plugins/counterup/wow.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/counterup/jquery.easing.1.3.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ asset('assets/plugins/counterup/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>

    <!-- Google Map -->
    <script src="{{ asset('assets/plugins/google-map/gmap3.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>
    <!-- Contact Form -->
    <script src="{{ asset('assets/plugins/jquery/contact.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @stack('script')

</body>

</html>