<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/background-hero.png');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2><?= $heading ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= base_url() ?>">Beranda</a></li>
                    <li><?= $breadcrumb ?></li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Tentang Section ======= -->
    <section id="tentang" class="tentang">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                    <img src="<?= base_url() ?>assets/img/profil/img-tentang.png" class="img-fluid rounded" alt="">
                    <a href="https://www.youtube.com/watch?v=TzUZprtv2A4" class="glightbox play-btn"></a>
                </div>
                <div class="col-lg-6 content order-last  order-lg-first">
                    <h3>Tentang SIJAB</h3>
                    <p style="text-align: justify;">
                        SIJAB (Sistem Informasi Jalan Raya Kota Bogor) adalah platform yang dirancang untuk menyediakan informasi real-time tentang kondisi jalan raya dan transportasi di kota Bogor. Sistem ini memberikan informasi tentang kepadatan lalu lintas, pelanggaran, kecelakaan, dan jumlah kendaraan di Kota Bogor. Berikut adalah beberapa fitur yang tersedia pada SIJAB:
                    </p>
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="fas fa-map-marked-alt mt-3"></i>
                            <div>
                                <h5>Peta Lalu Lintas</h5>
                                <p>Peta digital yang menyediakan informasi seputar kondisi lalu lintas terkini untuk memudahkan masyarakat mencari informasi lalu lintas Kota Bogor</p>

                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-webcam-fill"></i>
                            <div>
                                <h5>CCTV</h5>
                                <p>CCTV yang dapat diakses umum untuk melihat kondisi lalu lintas di Kota Bogor</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-phone-fill"></i>
                            <div>
                                <h5>SIJAB Mobile</h5>
                                <p>Aplikasi Mobile SIJAB untuk untuk memudahkan pencarian informasi lalu lintas Kota Bogor oleh masyarakat umum. <a href="#">Unduh Sekarang</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End Tentang Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter pt-0">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="<?= $get_count['cctv'] ?>" data-purecounter-duration="1" class="purecounter"></span>
                        <p>CCTV</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="<?= $get_count['trayek'] ?>" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Trayek</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="<?= $get_count['terminal'] ?>" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Halte</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="<?= $get_count['pos'] ?>" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Pos Polisi</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>
    </section><!-- End Stats Counter Section -->




</main><!-- End #main -->