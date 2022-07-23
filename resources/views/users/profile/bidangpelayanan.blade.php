@extends('layouts.main')

@section('container')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Bidang Pelayanan Kesehatan </h2>
                <ol>
                    <li><a href="{{ route('users.profil') }}">profil</a></li>
                    <li><a href="{{ route('users.profile.pencegahan') }}">Bidang Pelayanan Kesehatan</a>
                    </li>
                    <li>Bidang Pelayanan Kesehatan</li>
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
                                <img src="/assets/user/img/pelayanan.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="/assets/user/img/pelayanan.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="/assets/user/img/pelayanan.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Bidang Pelayanan Kesehatan </h3>
                        <ul>
                            <li><strong>BAB III </strong>
                            <li><strong>Hal</strong>: TUGAS DAN FUNGSI</li>
                            <li><strong>Bagian</strong>: Kelima </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 entries">
                    <div class="entry-content">
                        <h2>Pasal 17</h2>
                        <p>
                            (1) Bidang Pelayanan Kesehatan mempunyai tugas Melaksanakan perumusan dan pelaksanaan kebijakan
                            operasional di bidang pelayanan kesehatan primer, dan pelayanan kesehatan rujukan termasuk
                            peningkatan mutunya, serta pelayanan kesehatan tradisional.
                        </p>
                        <p>
                            (2) Untuk menyelenggarakan tugas sebagaimana dimaksud pada ayat (1), Bidang Pelayanan Kesehatan
                            menyelenggarakan fungsi:
                        <ul>a. penyiapan perumusan kebijakan operasional di bidang pelayanan kesehatan primer, dan pelayanan
                            kesehatan rujukan termasuk peningkatan mutunya, serta pelayanan kesehatan tradisional
                        </ul>
                        <ul> b. penyiapan pelaksanaan kebijakan operasional di bidang pelayanan kesehatan primer, dan
                            pelayanan kesehatan rujukan termasuk peningkatan mutunya, serta pelayanan kesehatan tradisional;
                        </ul>
                        <ul>c. penyiapan bimbingan teknis dan supervisi di bidang pelayanan kesehatan primer, dan pelayanan
                            kesehatan rujukan termasuk peningkatan mutunya, serta pelayanan kesehatan tradisional
                        </ul>
                        <ul>d. pemantauan, evaluasi dan pelaporan di bidang pelayanan kesehatan primer, dan pelayanan
                            kesehatan rujukan termasuk peningkatan mutunya, serta pelayanan kesehatan tradisional;</ul>
                        <ul>e. pelaksanaan tugas lainnya yang diberikan oleh atasan</ul>
                        </p>
                        <h2>Paragraf 1</h2>
                        <p>Seksi Pelayanan Kesehatan Primer </p>

                        <h2>Pasal 18</h2>
                        <p>
                            (1) Seksi pelayanan kesehatan primer mempunyai tugas Penyiapan perumusan dan pelaksanaan
                            kebijakan operasional, bimbingan teknis dan supervisi, serta pemantauan, evaluasi dan pelaporan
                            di bidang pelayanan kesehatan primer
                        </p>
                        <p>
                            (2) Untuk menyelenggarakan tugas sebagaimana dimaksud pada ayat (1) Seksi pelayanan kesehatan
                            primer menyelenggarakan fungsi
                        <ul>a. menyusun perencanaan di bidang pelayanan kesehatan primer</ul>
                        <ul>b. melaksanakan operasional di bidang pelayanan kesehatan primer;</ul>
                        <ul>c. melaksanakan bimbingan teknis dan supervisi di bidang pelayanan kesehatan primer;</ul>
                        <ul>d. melakukan evaluasi dan pelaporan di bidang pelayanan kesehatan primer;
                        </ul>
                        <ul>e. pelaksanaan tugas lainnya yang diberikan oleh atasan</ul>

                        </p>

                        <h2>Paragraf 2</h2>
                        <p>Seksi pelayanan kesehatan rujukan </p>

                        <h2>Pasal 19</h2>
                        <p>
                            (1) Seksi pelayanan kesehatan rujukan mempunyai tugas Penyiapan perumusan dan pelaksanaan
                            kebijakan operasional, bimbingan teknis dan supervisi, serta pemantauan, evaluasi dan pelaporan
                            di bidang pelayanan kesehatan rujukan
                        </p>
                        <p>
                            (2) Untuk menyelenggarakan tugas sebagaimana dimaksud pada ayat (1) Seksi pelayanan kesehatan
                            rujukan menyelenggarakan fungsi
                        <ul>a. menyusun perencanaan di bidang pelayanan kesehatan rujukan;</ul>
                        <ul>b. melaksanakan operasional di bidang pelayanan kesehatan rujukan;</ul>
                        <ul>c. melaksanakan bimbingan teknis dan supervisi di bidang pelayanan kesehatan rujukan;
                        </ul>
                        <ul>d. melakukan evaluasi dan pelaporan di bidang pelayanan kesehatan rujukan</ul>
                        <ul>e. pelaksanaan tugas lainnya yang diberikan oleh atasan.

                        </ul>
                        </p>

                        <h2>Paragraf 3</h2>
                        <p>Seksi Pelayanan Kesehatan Tradisional</p>

                        <h2>Pasal 20</h2>
                        <p>
                            (1) Seksi pelayanan kesehatan tradisional mempunyai tugas Penyiapan perumusan dan pelaksanaan
                            kebijakan operasional, bimbingan teknis dan supervisi, serta pemantauan, evaluasi dan pelaporan
                            di bidang pelayanan kesehatan tradisional
                        </p>
                        <p>
                            (2) Untuk menyelenggarakan tugas sebagaimana dimaksud pada ayat (1) Seksi pelayanan kesehatan
                            tradisional menyelenggarakan fungsi:
                        <ul>a. menyusun perencanaan di bidang pelayanan kesehatan tradisional</ul>
                        <ul>b. melaksanakan operasional di bidang pelayanan kesehatan tradisional;
                        </ul>
                        <ul>c. melaksanakan bimbingan teknis dan supervisi di bidang pelayanan kesehatan tradisional;
                        </ul>
                        <ul> d. melakukan evaluasi dan pelaporan di bidang pelayanan kesehatan tradisional;</ul>
                        <ul> e. pelaksanaan tugas lainnya yang diberikan oleh atasan</ul>
                        </p>

                    </div>
                </div>
            </div>

        </div>

        </div>
    </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection
