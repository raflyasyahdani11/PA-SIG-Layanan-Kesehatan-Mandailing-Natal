@extends('layouts.main')

@section('container')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Sekretaris</h2>
                <ol>
                    <li><a href="{{ route('users.profil') }}">profil</a></li>
                    <li><a href="{{ route('users.profile.sekretaris') }}">Sekretaris</a></li>
                    <li>Sekretariat</li>
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
                                <img src="/assets/user/img/sekretaris.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="/assets/user/img/sekretaris.jpg" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="/assets/user/img/sekretaris.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Sekretariat information</h3>
                        <ul>
                            <li><strong>BAB III </strong>
                            <li><strong>Hal</strong>: TUGAS DAN FUNGSI</li>
                            <li><strong>Bagian</strong>: Kedua</li>
                        </ul>
                    </div>
                </div>
                    <div class="col-lg-8 entries">
                        <div class="entry-content">
                            <h2>Pasal 5</h2>
                            <p>
                                (1) Sekretariat mempunyai tugas melaksanakan koordinasi, pelaksanaan
                                dan pemberian dukungan administrasi kepada seluruh unsur organisasi di lingkungan
                            </p>
                            <p>
                                (2)Untuk melaksanakan tugas sebagaimana dimaksud pada ayat (1),
                                Sekretariat menyelenggarakan fungsi:
                            <ul> a. penyiapan perumusan kebijakan operasional tugas administrasi dilingkungan Dinas,
                                alat kesehatan dan Perbekalan Kesehatan Rumah Tangga (PKRT) serta sumber daya kesehatan;
                            </ul>
                            <ul> b. koordinasi pelaksanaan tugas dan pemberian dukungan administrasi kepada seluruh
                                unsur organisasi di lingkungan Dinas</ul>
                            <ul> c. pemantauan, evaluasi dan pelaporan pelaksanaan tugas administrasi di lingkungan Dinas;
                            </ul>
                            <ul> d. pengelolaan aset yang menjadi tanggung jawab Dinas; </ul>
                            <ul> e. pelaksanaan tugas lainnya yang diberikan oleh atasan.</ul>
                            </p>
                            <h2>Paragraf 1</h2>
                            <p>Sub Bagian Program, Informasi dan Hubungan Masyarakat </p>

                            <h2>Pasal 6</h2>
                            <p>
                                (1) Sub Bagian Program, Informasi dan Hubungan Masyarakat mempunyai
                                tugas melaksanakan Penyiapan dan koordinasi penyusunan rumusan program dan informasi
                                serta penatalaksanaan hubungan masyarakat yang menjadi tanggung jawab Dinas
                            </p>
                            <p>
                                (2) Untuk melaksanakan tugas sebagaimana dimaksud pada ayat (1),
                                Sub Bagian Program, Informasi
                                dan Hubungan Masyarakat menyelenggarakan fungsi:
                            <ul> a. pengumpulan dan penyusunan Program, Informasi dan Hubungan Masyarakat</ul>
                            <ul> b. pengkoordinasian pelaksanaan kegiatan Program, Informasi dan Hubungan Masyarakat</ul>
                            <ul> c. pelaksanaan kegiatan Program, Informasi dan Hubungan Masyarakat</ul>
                            <ul> d. pelaksanaan monitoring, evaluasi dan pelaporan atas pelaksanaan program dan kegiatan
                            </ul>
                            <ul> e. pelaksanaan tugas lainnya yang diberikan oleh atasan..</ul>
                            </p>

                            <h2>Paragraf 2</h2>
                            <p>Sub Bagian Keuangan dan Pengelolaan Aset </p>

                            <h2>Pasal 7</h2>
                            <p>
                                (1) Sub Bagian Keuangan dan Pengelolaan Aset mempunyai tugas melaksanakan
                                Penyiapan dan koordinasi penyelenggaraan
                                urusan keuangan dan pengelolaan aset yang menjadi tanggung jawab Dinas
                            </p>
                            <p>
                                (2) Untuk melaksanakan tugas sebagaimana dimaksud pada ayat (1),
                                Sub Bagian Keuangan dan Pengelolaan Aset menyelenggarakan fungsi
                            <ul> a. pengumpulan dan penyusunan kegiatan keuangan dan pengelolaan aset Dinas</ul>
                            <ul> b. pengkoordinasian kegiatan keuangan dan pengelolaan aset Dinas</ul>
                            <ul> c. pelaksanaan kegiatan keuangan dan pengelolaan aset Dinas</ul>
                            <ul> d. pelaksanaan monitoring, evaluasi dan pelaporan atas pelaksanaan kegiatan keuangan dan
                                pengelolaan aset Dinas; </ul>
                            <ul> e. pelaksanaan tugas lainnya yang diberikan oleh atasan.</ul>
                            </p>

                            <h2>Paragraf 3</h2>
                            <p>Sub Bagian Hukum, Kepegawaian, dan Umum </p>

                            <h2>Pasal 8</h2>
                            <p>
                                (1) Sub Bagian hukum, kepegawaian dan Umum mempunyai tugas melaksanakan penyiapan
                                dan koordinasi penatalaksanaan hukum,
                                kepegawaian dan dukungan administrasi umum yang menjadi tanggung jawab Dinas
                            </p>
                            <p>
                                (2) Untuk melaksanakan tugas sebagaimana dimaksud pada ayat (1), Sub Bagian hukum,
                                kepegawaian
                                dan Umum menyelenggarakan fungsi:
                            <ul> a. pengumpulan dan penyusunan kegiatan penatalaksanaan hukum, kepegawaian dan dukungan
                                administrasi umum</ul>
                            <ul> b. pengkoordinasian kegiatan penatalaksanaan hukum, kepegawaian dan dukungan administrasi
                                umum;
                            </ul>
                            <ul> c. pelaksanaan kegiatan penatalaksanaan hukum, kepegawaian dan dukungan administrasi umum;
                            </ul>
                            <ul> d. pelaksanaan monitoring, evaluasi dan pelaporan atas pelaksanaan kegiatan penatalaksanaan
                                hukum,
                                kepegawaian dan dukungan administrasi umum;</ul>
                            <ul> e. pelaksanaan tugas lainnya yang diberikan oleh atasan.</ul>
                            </p>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection
