<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2><?= $heading ?></h2>
                <ol>
                    <li><a href="<?= base_url() ?>">Beranda</a></li>
                    <li><?= $breadcrumb ?></li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <?php
                $i = 0;
                foreach ($get_berita as $berita) :
                    // var_dump($berita);
                    // die;
                    // if (++$i == 6) break;
                ?>
                    <div class="col-lg-6 entries">
                        <article class="entry">

                            <div class="entry-img">
                                <img src="<?= url_api() . $berita['news_image'] ?>" alt="" class="img-fluid w-100">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html"><?= $berita['title'] ?></a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?= format_indoHari($berita['date_news']) ?></time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    <?= substr($berita['content'], 0, 300) . '. . .' ?>
                                </p>
                                <div class="read-more">
                                    <a href="<?= base_url('berita/detail/' . $berita['id']) ?>">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                    </div><!-- End blog entries list -->
                <?php endforeach ?>



            </div>

        </div>
    </section><!-- End Blog Section -->



</main><!-- End #main -->