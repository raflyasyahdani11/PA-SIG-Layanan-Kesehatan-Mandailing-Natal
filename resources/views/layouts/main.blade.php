<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistem Persebaran Layanan Kesehatan Mandailing Natal</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/user/img/madina.png" rel="icon">
    <link href="/assets/user/img/madina.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/user/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/assets/user/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/user/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/user/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/user/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/user/css/style.css" rel="stylesheet">

    @yield('css')
    <!-- =======================================================
  * Template Name: BizPage - v5.8.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid">

            <div class="row justify-content-center align-items-center">
                <div class="col-xl-11 d-flex align-items-center justify-content-between">
                    <h1 class="logo"><a href="/home"> Mandailing Natal</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html" class="logo"><img src="/assets/user/img/logo.png" alt="" class="img-fluid"></a>-->

                    <!-- <input type="email" class="form-control w-25 shadow-lg " id="exampleInputEmail1"
                        aria-describedby="emailHelp"> -->
                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a class="nav-item {{ Route::is('users.home') ? 'active' : '' }}"
                                    href="{{ route('users.home') }}">Home</a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);"><span>Layanan Kesehatan</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li>
                                        <a href="{{ route('users.layanankesehatan', 'Rumah_Sakit') }}">Rumah Sakit</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('users.layanankesehatan', 'Puskesmas') }}">Puskesmas</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('users.layanankesehatan', 'Klinik') }}">Klinik</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('users.layanankesehatan', 'Klinik_Gigi') }}">Klinik Gigi</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('users.layanankesehatan', 'Balai') }}">Balai</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-item {{ Route::is('users.profil') ? 'active' : '' }}"
                                    href="{{ route('users.profil') }}">Profil</a>
                            </li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->
                </div>
            </div>

        </div>
    </header><!-- End Header -->
    @yield('container')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- Vendor JS Files -->
    <script src="/assets/user/vendor/purecounter/purecounter.js"></script>
    <script src="/assets/user/vendor/aos/aos.js"></script>
    <script src="/assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/user/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/user/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/user/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/user/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="/assets/user/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/user/js/main.js"></script>
    @stack('js')
</body>

</html>
