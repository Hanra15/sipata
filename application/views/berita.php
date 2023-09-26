<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/background-hero.png');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2><?= $heading ?></h2>
                        <p>Berita seputar lalu lintas di Kota Bogor</p>
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

    <!-- ======= Horizontal Pricing Section ======= -->
    <section id="horizontal-pricing" class="horizontal-pricing pt-0">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <!-- <span>Horizontal Pricing</span>
                <h2>Horizontal Pricing</h2> -->
            </div>

            <?php
            $i = 0;
            foreach ($get_berita as $berita) :
                // var_dump($berita);
                // die;
                if (++$i == 6) break;
            ?>

                <div class="row gy-4 pricing-item mt-3 mb-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3 d-flex align-items-center justify-content-center">
                        <img src="<?= url_api() . $berita['news_image'] ?>" alt="" class="w-100 img-fluid">
                    </div>
                    <div class="col-lg-6 align-self-start">
                        <h4 class="fs-4"><?= $berita['title'] ?></h4>
                        <h6 class="text-secondary mb-3"><?= format_indoHari($berita['date_news']) ?></h6>
                        <p><?= substr($berita['content'], 0, 300) . '. . .' ?></p>
                    </div>

                    <div class="col-lg-3 d-flex align-items-center justify-content-center">
                        <div class="text-center"><a href="<?= base_url('berita/detail/' . $berita['id']) ?>" class="buy-btn">Baca Selengkapnya</a></div>
                    </div>
                </div>
                <!-- End Pricing Item -->

            <?php
            endforeach
            ?>

        </div>
    </section><!-- End Horizontal Pricing Section -->

</main><!-- End #main -->