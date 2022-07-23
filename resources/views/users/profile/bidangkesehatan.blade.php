@extends('layouts.main')

@section('container')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Bidang Kesehatan Masyarakat</h2>
                <ol>
                    <li><a href="{{ route('users.profil') }}">profil</a></li>
                    <li><a href="{{ route('users.profile.kesehatan') }}">Bidang Kesehatan Masyarakat</a></li>
                    <li>Bidang Kesehatan Masyarakat</li>
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
                                <img src="/assets/user/img/kesehatanmasyarakat.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="/assets/user/img/kesehatanmasyarakat.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="/assets/user/img/kesehatanmasyarakat.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Bidang Kesehatan Masyarakat information</h3>
                        <ul>
                            <li><strong>BAB III </strong>
                            <li><strong>Hal</strong>: TUGAS DAN FUNGSI</li>
                            <li><strong>Bagian</strong>: Ketiga</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 entries">
                    <div class="entry-content">
                        <h2>Pasal 9</h2>
                        <p>
                            (1) Bidang Kesehatan Masyarakat mempunyai tugas Melaksanakan perumusan dan pelaksanaan kebijakan
                            operasional di bidang kesehatan keluarga, gizi masyarakat, promosi kesehatan, pemberdayaan
                            masyarakat,
                            kesehatan lingkungan, kesehatan kerja dan olah raga
                        </p>
                        <p>
                            (2) Untuk menyelenggarakan tugas sebagaimana dimaksud pada ayat (1),
                            Bidang Kesehatan Masyarakat menyelenggarakan fungsi:
                        <ul>a. penyiapan perumusan kebijakan operasional di bidang kesehatan keluarga, gizi masyarakat,
                            promosi kesehatan,
                            pemberdayaan masyarakat, kesehatan lingkungan, kesehatan kerja dan olah raga
                        </ul>
                        <ul> b. penyiapan pelaksanaan kebijakan operasional di bidang kesehatan keluarga, gizi masyarakat,
                            promosi kesehatan, pemberdayaan masyarakat,
                            kesehatan lingkungan, kesehatan kerja dan olah raga;</ul>
                        <ul>c. penyiapan bimbingan teknis dan supervisi di bidang kesehatan keluarga, gizi masyarakat,
                            promosi kesehatan,
                            pemberdayaan masyarakat, kesehatan lingkungan, kesehatan kerja dan olah raga
                        </ul>
                        <ul> d. pemantauan, evaluasi dan pelaporan di bidang kesehatan keluarga, gizi masyarakat, promosi
                            kesehatan,
                            pemberdayaan masyarakat, kesehatan lingkungan, kesehatan kerja dan olah raga</ul>
                        <ul>e. pelaksanaan tugas lainnya yang diberikan oleh atasan.</ul>
                        </p>
                        <h2>Paragraf 1</h2>
                        <p>Seksi Kesehatan Keluarga dan Gizi Masyarakat </p>

                        <h2>Pasal 10</h2>
                        <p>
                            (1) Seksi Kesehatan Keluarga dan Gizi Masyarakat mempunyai tugas Penyiapan perumusan dan
                            pelaksanaan kebijakan operasional, bimbingan teknisdan supervisi, serta pemantauan,
                            evaluasi dan pelaporan di bidang kesehatan keluarga dan gizi masyarakat
                        </p>
                        <p>
                            (2) Untuk menyelenggarakan tugas sebagaimana dimaksud pada ayat (1),
                            Seksi Kesehatan Keluarga dan Gizi Masyarakat menyelenggarakan fungsi
                        <ul> a. menyusun perencanaan di bidang kesehatan keluarga dan gizi masyarakat</ul>
                        <ul> b. melaksanakan operasional di bidang kesehatan keluarga dan gizi masyarakat</ul>
                        <ul> c. melaksanakan bimbingan teknis dan supervisi di bidang kesehatan keluarga dan gizi
                            masyarakat;</ul>
                        <ul> d. melakukan evaluasi dan pelaporan di bidang kesehatan keluarga dan gizi masyarakat;
                        </ul>
                        <ul> e. pelaksanaan tugas lainnya yang diberikan oleh atasan.</ul>

                        </p>

                        <h2>Paragraf 2</h2>
                        <p>Seksi Promosi dan Pemberdayaan Masyarakat </p>

                        <h2>Pasal 11</h2>
                        <p>
                            (1) Seksi Promosi dan Pemberdayaan Masyarakat mempunyai tugas Penyiapan perumusan dan
                            pelaksanaan kebijakan operasional, bimbingan teknis dan supervisi,
                            serta pemantauan, evaluasi dan pelaporan di bidang promosi dan pemberdayaan masyarakat
                        </p>
                        <p>
                            (2) Untuk menyelenggarakan tugas sebagaimana dimaksud pada ayat (1),
                            Seksi Promosi dan Pemberdayaan Masyarakat menyelenggarakan fungsi:
                        <ul>a. menyusun perencanaan di bidang Promosi dan Pemberdayaan Masyarakat</ul>
                        <ul>b. melaksanakan operasional di bidang Promosi dan Pemberdayaan Masyarakat;</ul>
                        <ul>c. melaksanakan bimbingan teknis dan supervisi di bidang Promosi dan Pemberdayaan Masyarakat;
                        </ul>
                        <ul>d. melakukan evaluasi dan pelaporan di bidang Promosi dan Pemberdayaan Masyarakat</ul>
                        <ul>e. pelaksanaan tugas lainnya yang diberikan oleh atasan</ul>
                        </p>

                        <h2>Paragraf 3</h2>
                        <p>Seksi Kesehatan Lingkungan, Kesehatan Kerja dan Olah Raga </p>

                        <h2>Pasal 12</h2>
                        <p>
                            (1) Seksi Kesehatan Lingkungan, Kesehatan Kerja dan Olah Raga mempunyai tugas Penyiapan
                            perumusan dan pelaksanaan kebijakan operasional, bimbingan teknis dan supervisi, serta
                            pemantauan,
                            evaluasi dan pelaporan di bidang kesehatan lingkungan, kesehatan kerja dan olah raga
                        </p>
                        <p>
                            (2) Untuk menyelenggarakan tugas sebagaimana dimaksud pada ayat (1), Seksi kesehatan lingkungan,
                            kesehatan kerja dan olah raga menyelenggarakan fungsi:
                        <ul> a. menyusun perencanaan di bidang kesehatan lingkungan, kesehatan kerja dan olah raga;</ul>
                        <ul> b. melaksanakan operasional di bidang kesehatan lingkungan, kesehatan kerja dan olah raga;
                        </ul>
                        <ul>c. melaksanakan bimbingan teknis dan supervisi di bidang kesehatan lingkungan, kesehatan kerja
                            dan olah raga;
                        </ul>
                        <ul> d. melakukan evaluasi dan pelaporan di bidang kesehatan lingkungan, kesehatan kerja dan olah
                            raga;</ul>
                        <ul> e.	pelaksanaan tugas lainnya yang diberikan oleh atasan</ul>
                        </p>

                    </div>
                </div>
            </div>

        </div>

        </div>
    </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection
