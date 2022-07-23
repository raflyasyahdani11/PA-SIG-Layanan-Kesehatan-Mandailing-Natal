@extends('layouts.main')

@section('container')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Unit Pelaksana Teknis Dinas </h2>
                <ol>
                    <li><a href="{{ route('users.profil') }}">profil</a></li>
                    <li><a href="{{ route('users.profile.unit') }}">Unit Pelaksana Teknis Dinas </a>
                    </li>
                    <li>Unit Pelaksana Teknis Dinas</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="/assets/user/img/unit.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="/assets/user/img/unit.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="/assets/user/img/unit.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Unit Pelaksana Teknis Dinas</h3>
                        <ul>
                            <li><strong>BAB III </strong>
                            <li><strong>Hal</strong>: TUGAS DAN FUNGSI</li>
                            <li><strong>Bagian</strong>: Ketujuh </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 entries">
                    <div class="entry-content">
                        <h2>Pasal 25</h2>
                        <p>
                            (1) Untuk melaksanakan kegiatan teknis operasional dan/atau kegiatan teknis penunjang tertentu,
                            dapat dibentuk UPT pada Dinas sesuai dengan kebutuhan
                        </p>
                        <p>
                            (2) Pembentukan UPT sebagaimana dimaksud pada ayat (1) ditetapkan dengan Peraturan Bupati
                            setelah dikonsultasikan secara tertulis kepada Gubernur sebagai wakil pemerintah pusat


                        <h2>Pasal 26</h2>
                        <p>
                            (1) Selain UPT sebagaimana dimaksud pada Pasal 25, pada Dinas terdapat UPT berupa Rumah Sakit
                            Umum Daerah dan Pusat Kesehatan Masyarakat.
                        </p>
                        <p>
                            (2) Ketentuan lebih lanjut mengenai susunan organisasi, tugas dan fungsi, serta tata hubungan
                            kerja Rumah Sakit Umum Daerah dan Pusat Kesehatan Masyarakat dengan Dinas, ditetapkan dengan
                            Peraturan Bupati berdasarkan peraturan perundang-undangan
                        </p>
                    </div>
                </div>
            </div>

        </div>

        </div>
    </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection
