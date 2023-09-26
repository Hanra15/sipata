<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('../../assets/img/background-hero.png');padding-bottom: 10px;padding-top: 90px;">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2><?= $heading ?></h2>
                        <!-- <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p> -->
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="<?= base_url() ?>">Beranda</a></li>
                    <li><a href="<?= base_url() ?>berita">Berita</a></li>
                    <li><?= $breadcrumb ?></li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-8">
                    <img src="<?= url_api() . $detail_berita['news_image'] ?>" alt="" class="img-fluid services-img" width="100%">

                    <h3 style="text-align:justify;"><?= $detail_berita['title'] ?></h3>
                    <h6 class="text-secondary mb-3"><?= format_indoHari($detail_berita['date_news']) ?></h6>
                    <textarea name="" id="" rows="15" style="width: 100%; border:none; text-align:justify; background-color:white; color:black" disabled>
                    <?= $detail_berita['content'] ?>
                    </textarea>
                    <!-- <p style="text-align:justify;">
                        <?= $detail_berita['content'] ?>
                    </p> -->

                </div>

                <div class="col-lg-4">
                    <h4>Berita Lainnya</h4>
                    <div class="services-list">

                        <?php
                        $i = 0;
                        foreach ($all_berita as $berita) :
                            // var_dump($berita);
                            // die;
                            if (++$i == 6) break;
                        ?>
                            <a href="<?= base_url('berita/detail/' . $berita['id']) ?>">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="<?= url_api() . $berita['news_image'] ?>" alt="berita" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                        <h6><?= $berita['title'] ?></h6>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>



                </div>

            </div>

        </div>
    </section><!-- End Service Details Section -->

</main><!-- End #main -->