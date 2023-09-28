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

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src="<?= url_api() . $detail_berita['news_image'] ?>" alt="" class="img-fluid w-100">
                        </div>

                        <h2 class="entry-title">
                            <a href="#"><?= $detail_berita['title'] ?></a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01"><?= format_indoHari($detail_berita['date_news']) ?></time></a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <textarea name="" id="" rows="25" style="width: 100%; border:none; text-align:justify; background-color:white; color:black" disabled>
                                <?= $detail_berita['content'] ?>
                            </textarea>
                        </div>

                        <div class="entry-footer">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#">Pariwisata</a></li>
                            </ul>
                        </div>

                    </article><!-- End blog entry -->

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            <?php
                            $i = 0;
                            foreach ($all_berita as $berita) :
                                // var_dump($berita);
                                // die;
                                if (++$i == 6) break;
                            ?>
                                <div class="post-item clearfix">
                                    <img src="<?= url_api() . $berita['news_image'] ?>" alt="">
                                    <h4><a href="<?= base_url('berita/detail/' . $berita['id']) ?>"><?= $berita['title'] ?></a></h4>
                                    <time datetime="2020-01-01"><?= format_indoHari($berita['date_news']) ?></time>
                                </div>
                            <?php endforeach; ?>

                        </div><!-- End sidebar recent posts-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Single Section -->

</main><!-- End #main -->