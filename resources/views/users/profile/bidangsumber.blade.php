@extends('layouts.main')

@section('container')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Bidang Sumber Daya Kesehatan </h2>
                <ol>
                    <li><a href="{{ route('users.profil') }}">profil</a></li>
                    <li><a href="{{ route('users.profile.sumber') }}">Bidang Sumber Daya Kesehatan </a>
                    </li>
                    <li>Bidang Sumber Daya Kesehatan </li>
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
                                <img src="/assets/user/img/sumberdaya.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="/assets/user/img/sumberdaya.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="/assets/user/img/sumberdaya.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Bidang Sumber Daya Kesehatan </h3>
                        <ul>
                            <li><strong>BAB III </strong>
                            <li><strong>Hal</strong>: TUGAS DAN FUNGSI</li>
                            <li><strong>Bagian</strong>: Keenam </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 entries">
                    <div class="entry-content">
                        <h2>Pasal 21</h2>
                        <p>
                            (1) Bidang sumber daya kesehatan mempunyai tugas Melaksanakan perumusan dan pelaksanaan
                            kebijakan operasional di bidang kefarmasian, alat kesehatan dan PKRT serta sumber daya manusia
                            kesehatan
                        </p>
                        <p>
                            (2) Untuk menyelenggarakan tugas sebagaimana dimaksud pada ayat (1), Bidang sumber daya
                            kesehatan menyelenggarakan fungsi:
                        <ul>a. penyiapan perumusan kebijakan operasional di bidang kefarmasian, alat kesehatan dan PKRT
                            serta sumber daya manusia kesehatan
                        </ul>
                        <ul> b. penyiapan pelaksanaan kebijakan operasional di bidang kefarmasian, alat kesehatan dan PKRT
                            serta sumber daya manusia kesehatan;
                        </ul>
                        <ul>c. penyiapan bimbingan teknis dan supervisi di bidang kefarmasian, alat kesehatan dan PKRT serta
                            sumber daya manusia kesehatan;
                        </ul>
                        <ul>d. pemantauan, evaluasi dan pelaporan di bidang kefarmasian, alat kesehatan dan PKRT serta
                            sumber daya manusia kesehatan</ul>
                        <ul>e. pelaksanaan tugas lainnya yang diberikan oleh atasan</ul>
                        </p>
                        <h2>Paragraf 1</h2>
                        <p>Seksi Kefarmasian</p>

                        <h2>Pasal 22</h2>
                        <p>
                            (1) Seksi Kefarmasian mempunyai tugas Penyiapan perumusan dan pelaksanaan kebijakan operasional,
                            bimbingan teknis dan supervisi, serta pemantauan, evaluasi dan pelaporan di bidang kefarmasian
                        </p>
                        <p>
                            (2) Untuk menyelenggarakan tugas sebagaimana dimaksud pada ayat (1) Seksi Kefarmasian
                            menyelenggarakan fungsi
                        <ul>a. menyusun perencanaan di bidang kefarmasian</ul>
                        <ul>b. melaksanakan operasional di bidang kefarmasian</ul>
                        <ul>c. melaksanakan bimbingan teknis dan supervisi di bidang kefarmasian</ul>
                        <ul>d. melakukan evaluasi dan pelaporan di bidang kefarmasian</ul>
                        <ul>e. pelaksanaan tugas lainnya yang diberikan oleh atasan</ul>

                        </p>

                        <h2>Paragraf 2</h2>
                        <p>Seksi Alat Kesehatan dan PKRT </p>

                        <h2>Pasal 23</h2>
                        <p>
                            (1) Seksi alat kesehatan dan PKRT mempunyai tugas Penyiapan perumusan dan pelaksanaan kebijakan
                            operasional, bimbingan teknis dan supervisi, serta pemantauan, evaluasi dan pelaporan di bidang
                            alat kesehatan dan PKRT
                        </p>
                        <p>
                            (2) Untuk menyelenggarakan tugas sebagaimana dimaksud pada ayat (1) Seksi alat kesehatan dan
                            PKRT menyelenggarakan fungsi:
                        <ul>a. menyusun perencanaan di bidang alat kesehatan dan PKRT;</ul>
                        <ul>b. melaksanakan operasional di bidang alat kesehatan dan PKRT</ul>
                        <ul>c. melaksanakan bimbingan teknis dan supervisi di bidang alat kesehatan dan PKRT
                        </ul>
                        <ul>d. melakukan evaluasi dan pelaporan di bidang alat kesehatan dan PKRT</ul>
                        <ul>e. pelaksanaan tugas lainnya yang diberikan oleh atasan.

                        </ul>
                        </p>

                        <h2>Paragraf 3</h2>
                        <p>Seksi Sumber Daya Manusia Kesehatan </p>

                        <h2>Pasal 24</h2>
                        <p>
                            (1) Seksi sumber daya manusia kesehatan mempunyai tugas Penyiapan perumusan dan pelaksanaan
                            kebijakan operasional, bimbingan teknis dan supervisi, serta pemantauan, evaluasi dan pelaporan
                            di bidang sumber daya manusia kesehatan
                        </p>
                        <p>
                            (2) Untuk menyelenggarakan tugas sebagaimana dimaksud pada ayat (1) Seksi sumber daya manusia
                            kesehatan menyelenggarakan fungsi:
                        <ul>a. menyusun perencanaan di bidang sumber daya manusia kesehatan</ul>
                        <ul>b. melaksanakan operasional di bidang sumber daya manusia kesehatan
                        </ul>
                        <ul>c. melaksanakan bimbingan teknis dan supervisi di bidang sumber daya manusia kesehatan;
                        </ul>
                        <ul>d. melakukan evaluasi dan pelaporan di bidang sumber daya manusia kesehatan</ul>
                        <ul>e. pelaksanaan tugas lainnya yang diberikan oleh atasan</ul>
                        </p>

                    </div>
                </div>
            </div>

        </div>

        </div>
    </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection
