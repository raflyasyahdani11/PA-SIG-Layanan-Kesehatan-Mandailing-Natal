@extends('layouts.main')
@section('container')
    <!-- ======= hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active"
                        style="background-image: url(/assets/user/img/bg-dinas.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Profil Dinas Kesehatan Mandailing
                                    Natal</h2>
                                <a href="{{ route('users.profil')}}"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(/assets/user/img/dinas2.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Visi</h2>
                                <p class="animate__animated animate__fadeInUp">“MEWUJUDKAN MASYARAKAT KABUPATEN MANDAILING
                                    NATAL SEHAT, MANDIRI, PARTISIPASIF DAN BERKELANJUTAN”</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(/assets/user/img/dinas.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Misi</h2>
                                <p class="animate__animated animate__fadeInUp">
                                    <li>Misi 1: Menjamin ketersediaan pelayanan kesehatan yang bermutu, merata, dan
                                        terjangkau.</li>
                                    <li>Misi 2: Meningkatkan pengendalian dan penanggulangan masalah kesehatan.</li>
                                    <li>Misi 3: Meningkatkan mutu sumber daya kesehatan.</li>
                                    <li>Misi 4: Meningkatkan partisipasi masyarakat dalam bidang kesehatan.</li>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <!-- ======= susunan Section ======= -->
    <section id="about">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Susunan OrganiSasi</h3>
                <p> unsur pembantu Dinas Kesehatan
                    Daerah Kabupaten dalam penyelenggaraan urusan pemerintahan yang menjadi
                    kewenangan Daerah.</p>
            </header>

            <div class="row about-cols">

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <div class="img">
                            <img src="/assets/user/img/kadis.jpg" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Kepala Dinas</a></h2>
                        <p>
                            Kepala Dinas yang berkedudukan di bawah dan bertanggung jawab kepada Bupati melalui Sekretaris
                            Daerah
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-col">
                        <div class="img">
                            <img src="/assets/user/img/sekretaris.jpg" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Sekretaris</a></h2>
                        <li> Sub Bagian Program,Informasi dan Hubungan Masyarakat</li>
                        <li> Sub Bagian Keuangan dan Pengelolaan Aset</li>
                        <li> Sub Bagian Hukum, Kepegawaian, dan Umum</li>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col">
                        <div class="img">
                            <img src="/assets/user/img/kesehatanmasyarakat.jpg" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Bidang Bidang Kesehatan Masyarakat</a></h2>
                        <li>Seksi Kesehatan Keluarga dan Gizi Masyarakat</li>
                        <li>Seksi Promosi dan Pemberdayaan Masyarakat</li>
                        <li>Seksi Kesehatan Lingkungan, Kesehatan Kerja dan Olah Raga</li>
                    </div>
                </div>

            </div>

            <div class="row about-cols">

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <div class="img">
                            <img src="/assets/user/img/pencegahan.jpg" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Bidang Pencegahan dan Pengendalian Penyakit</a></h2>
                        <li>Seksi Surveilans dan Imunisasi</li>
                        <li>Seksi Pencegahan dan Pengendalian Penyakit Menular</li>
                        <li>Seksi Pencegahan dan Pengendalian Penyakit Tidak Menular dan Kesehatan Jiwa</li>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-col">
                        <div class="img">
                            <img src="/assets/user/img/pelayanan.jpg" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Bidang Pelayanan Kesehatan</a></h2>
                        <li>Seksi Pelayanan Kesehatan Primer</li>
                        <li>Seksi Pelayanan Kesehatan Rujukan</li>
                        <li>Seksi Pelayanan Kesehatan Tradisional</li>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col">
                        <div class="img">
                            <img src="/assets/user/img/sumberdaya.jpg" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Vision</a></h2>
                        <li>Seksi Kefarmasian</li>
                        <li>Seksi Alat Kesehatan dan PKRT</li>
                        <li>Seksi Sumber Daya Manusia Kesehatan</li>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col">
                        <div class="img">
                            <img src="/assets/user/img/unit.jpg" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Unit Pelaksana Teknis Dinas</a></h2>
                        <p>
                        </p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col">
                        <div class="img">
                            <img src="/assets/user/img/kelompok.jpg" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Kelompok Jabatan Fungsional</a></h2>
                        <p>
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End About Us Section -->
    <!-- ======= bidang ======= -->
    <section id="portfolio" class="section-bg">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3 class="section-title">TUGAS DAN FUNGSI</h3>
            </header>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class=" col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-kadis">Kepala Dinas</li>
                        <li data-filter=".filter-sekretaris">Sekretariat</li>
                        <li data-filter=".filter-kesehatan">Bidang Kesehatan Masyarakat </li>
                        <li data-filter=".filter-pencegahan">Bidang Pencegahan dan Pengendalian Penyakit </li>
                        <li data-filter=".filter-pelayanan">Bidang Pelayanan Kesehatan</li>
                        <li data-filter=".filter-sumberdaya">Bidang Sumber Daya Kesehatan </li>
                        <li data-filter=".filter-unit">Unit Pelaksana Teknis Dinas</li>
                        <li data-filter=".filter-kelompok">Kelompok Jabatan Fungsional</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <!-- ======= kadis ======= -->
                <div class="col-md-3 portfolio-item filter-kadis">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="/assets/user/img/kadis.jpg" class="img-fluid" alt="">
                            <a href="/assets/user/img/kadis.jpg" data-lightbox="portfolio" data-title="App 1"
                                class="link-preview"><i class="bi bi-plus"></i></a>
                            <a href="{{ route('users.profile.kadis')}}" class="link-details" title="More Details"><i
                                    class="bi bi-link"></i></a>
                        </figure>
                        <div class="portfolio-info">
                            <h4><a href="{{ route('users.profile.kadis')}}">Kepala Dinas</a></h4>
                            <p>Kepala dinas</p>
                        </div>
                    </div>
                </div>
                <!-- ======= sekretaris ======= -->
                <div class="col-md-3 portfolio-item filter-sekretaris">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="/assets/user/img/sekretaris.jpg" class="img-fluid" alt="">
                            <a href="/assets/user/img/sekretaris.jpg" class="link-preview portfolio-lightbox"
                                data-gallery="portfolioGallery" title="Web 3"><i class="bi bi-plus"></i></a>
                            <a href="{{ route('users.profile.sekretaris')}}" class="link-details" title="More Details"><i
                                    class="bi bi-link"></i></a>
                        </figure>
                        <div class="portfolio-info">
                            <h4><a href="{{ route('users.profile.sekretaris')}}">Sekretariat</a></h4>
                            <p>Sekretariat</p>
                        </div>
                    </div>
                </div>

                <!-- ======= Bidang Kesehatan Masyrakat ======= -->
                <div class="col-md-3 portfolio-item filter-kesehatan">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="/assets/user/img/kesehatanmasyarakat.jpg" class="img-fluid" alt="">
                            <a href="/assets/user/img/kesehatanmasyarakat.jpg" class="link-preview portfolio-lightbox"
                                data-gallery="portfolioGallery" title="App 2"><i class="bi bi-plus"></i></a>
                            <a href="{{ route('users.profile.kesehatan')}}" class="link-details" title="More Details"><i
                                    class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="{{ route('users.profile.kesehatan')}}">Bidang Kesehatan </a></h4>
                            <p> Bidang Kesehatan Masyarakat </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 portfolio-item filter-pencegahan">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="/assets/user/img/pencegahan.jpg" class="img-fluid" alt="">
                            <a href="/assets/user/img/pencegahan.jpg" class="link-preview portfolio-lightbox"
                                data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
                            <a href="{{ route('users.profile.pencegahan')}}" class="link-details" title="More Details"><i
                                    class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="{{ route('users.profile.pencegahan')}}">Bidang Pencegahan </a></h4>
                            <p>Bidang Pencegahan dan Pengendalian Penyakit</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 portfolio-item filter-pelayanan">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="/assets/user/img/pelayanan.jpg" class="img-fluid" alt="">
                            <a href="/assets/user/img/pelayanan.jpg" class="link-preview portfolio-lightbox"
                                data-gallery="portfolioGallery" title="Web 2"><i class="bi bi-plus"></i></a>
                            <a href="{{ route('users.profile.pelayanan')}}" class="link-details" title="More Details"><i
                                    class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="{{ route('users.profile.pelayanan')}}">Bidang Pelayanan </a></h4>
                            <p>Bidang Pelayanan Kesehatan</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 portfolio-item filter-sumberdaya">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="/assets/user/img/sumberdaya.jpg" class="img-fluid" alt="">
                            <a href="/assets/user/img/sumberdaya.jpg" class="link-preview portfolio-lightbox"
                                data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
                            <a href="{{ route('users.profile.sumber')}}" class="link-details" title="More Details"><i
                                    class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="{{ route('users.profile.sumber')}}">Bidang Sumber Daya  </a></h4>
                            <p>Bidang Sumber Daya Kesehatan </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 portfolio-item filter-unit">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="/assets/user/img/unit.jpg" class="img-fluid" alt="">
                            <a href="/assets/user/img/unit.jpg" class="link-preview portfolio-lightbox"
                                data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
                            <a href="{{ route('users.profile.unit')}}" class="link-details" title="More Details"><i
                                    class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="{{ route('users.profile.unit')}}">Unit Pelaksana  </a></h4>
                            <p>Unit Pelaksana Teknis Dinas </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 portfolio-item filter-kelompok">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="/assets/user/img/kelompok.jpg" class="img-fluid" alt="">
                            <a href="/assets/user/img/kelompok.jpg" class="link-preview portfolio-lightbox"
                                data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
                            <a href="{{ route('users.profile.kelompok')}}" class="link-details" title="More Details"><i
                                    class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="{{ route('users.profile.kelompok')}}">Kelompok Jabatan </a></h4>
                            <p>Kelompok Jabatan Fungsional</p>
                        </div>
                    </div>
                </div>
            </div>

            </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            Komplek Perkantoran Payaloting<br>
                            Kec. Panyabungan Kota<br>
                            Kab. Mandailing Natal <br>
                            Prov. Sumatera Utara<br>
                            <strong>Phone:</strong>(0636)326175<br>
                            
                        </p>
                        <div class="social-links">
                            <a href="https://www.facebook.com/profile.php?id=100066954802934" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/dinkesmadina/?hl=id" class="instagram"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
@endsection
