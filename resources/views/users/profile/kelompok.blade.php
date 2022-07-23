@extends('layouts.main')

@section('container')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Kelompok Jabatan Fungsional</h2>
                <ol>
                    <li><a href="{{ route('users.profil') }}">profil</a></li>
                    <li><a href="{{ route('users.profile.kelompok') }}">Kelompok Jabatan Fungsional</a>
                    </li>
                    <li>Kelompok Jabatan Fungsional</li>
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
                                <img src="/assets/user/img/kelompok.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="/assets/user/img/kelompok.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="/assets/user/img/kelompok.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Kelompok Jabatan Fungsional</h3>
                        <ul>
                            <li><strong>BAB III </strong>
                            <li><strong>Hal</strong>: TUGAS DAN FUNGSI</li>
                            <li><strong>Bagian</strong>: Kedelapan </li>
                        </ul>
                    </div>
                </div>

                <article class="entry">
                <div class="col-lg-8 entries">
                    <div class="entry-content">
    
                        <h2>Pasal 27</h2>
                        <p>
                            (1) Kelompok jabatan fungsional mempunyai tugas pokok melaksnakan sebagian kegiatan Dinas secara
                            profesional sesua dengan kebutuhan.
                        </p>
                        <p>
                            (2) Pembentukan UPT sebagaimana dimaksud pada ayat (1) ditetapkan dengan Peraturan Bupati
                            setelah dikonsultasikan secara tertulis kepada Gubernur sebagai wakil pemerintah pusat </p>
                        <p>
                            (2) Kelompok jabatan fungsional sebagaimana dimaksud pada ayat (1) dalam melaksanakan tugasnya
                            berada dibawah dan tanggung jawab kepada Kepala Dinas.
                        </p>
                        <p>
                            (3) Jumlah jabatan Fungsional sebagaimana di maksud pada ayat (1) ditentukan berdasarkan sifat,
                            jenis, kebutuhan dan beban kerja. </p>
                        <p>
                            (4) Jenis dan tunjangan fungsional tersebut pada ayat (1) diatur sesuai dengan
                            perundang-undangan.
                        </p>
                    </article>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection
