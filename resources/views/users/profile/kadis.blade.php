@extends('layouts.main')

@section('container')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Kepala Dinas</h2>
                <ol>
                    <li><a href="{{ route('users.profil') }}">profil</a></li>
                    <li><a href="{{ route('users.profile.kadis') }}">kadis</a></li>
                    <li>Kepala Dinas</li>
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
                                <img src="/assets/user/img/kadis.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="/assets/user/img/kadis.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="/assets/user/img/kadis.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Kepala Dinas information</h3>
                        <ul>
                            <li><strong>BAB III </strong>
                            <li><strong>Hal</strong>: TUGAS DAN FUNGSI</li>
                            <li><strong>Bagian</strong>: Kesatu</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 entries">
                    <div class="portfolio-description">
                        <h2>Pasal 4</h2>
                        <p>
                            (1) Kepala Dinas mempunyai tugas merumuskan, menyelenggarakan,
                            membina dan mengevaluasi penyusunan dan pelaksanaan urusan
                            pemerintahan daerah serta tugas pembantuan dibidang Kesehatan
                        </p>
                        <p>
                            (2) Untuk melaksanakan tugas sebagaimana dimaksud pada ayat (1),
                            Kepala Dinas menyelenggarakan fungsi:
                        <ul> a. perumusan kebijakan di bidang kesehatan masyarakat, pencegahan dan pengendalian penyakit,
                            pelayanan kesehatan, kefarmasian,
                            alat kesehatan dan Perbekalan Kesehatan Rumah Tangga (PKRT) serta sumber daya kesehatan;</ul>
                        <ul> b. pelaksanaan kebijakan di bidang kesehatan masyarakat, pencegahan dan
                            pengendalian penyakit, pelayanan kesehatan, kefarmasian, alat kesehatan dan
                            perbekalan kesehatan rumah tangga
                            (PKRT) serta sumber daya kesehatan;</ul>
                        <ul> c. pelaksanaan evalusasi dan pelaporan di bidang kesehatan masyarakat,
                            pencegahan dan pengendalian penyakit, pelayanan kesehatan, kefarmasian, alat kesehatan
                            dan perbekalan kesehatan rumah tangga (PKRT) serta sumber daya kesehatan;</ul>
                        <ul> d. pelaksanaan administrasi Dinas sesuai dengan lingkup tugasnya; </ul>
                        <ul> e. pelaksanaan fungsi lain yang di berikan oleh Bupati terkait dengan bidang kesehatan</ul>
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection
