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
                            <img src="<?= url_api() . $detail['image_fasum'] ?>" alt="" class="img-fluid w-100">
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="entry-title">
                                    <a href="#"><?= $detail['name_fasum'] ?></a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> Buka - <?= substr($detail['open_time'], 0, 5) ?></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> Tutup - <?= substr($detail['close_time'], 0, 5) ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 align-self-center">
                                <div class="row justify-content-end">
                                    <a href="tel:<?= $detail['contact_fasum'] ?>" class="btn btn-primary w-75">Hubungi Pengelola</a>

                                </div>
                            </div>
                        </div>

                        <div class="entry-content">
                            <h6 class="fw-bold">Alamat</h6>
                            <p><?= $detail['address'] ?></p>
                        </div>

                        <div class="entry-footer">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#">
                                        <?php
                                        if ($detail['category_fasum']['id'] == 1) {
                                            echo 'Wisata';
                                        } else {
                                            echo 'Penginapan';
                                        }
                                        ?>
                                    </a></li>
                            </ul>
                            <ul class="tags">
                                <li><a href="<?= base_url('pelayanan/peta?') . 'lat=' . $detail['latitude'] . '&long=' . $detail['longitude'] ?>" class="btn btn-primary text-white">Lihat di Peta</a></li>
                            </ul>
                        </div>

                    </article><!-- End blog entry -->

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Wisata lain</h3>
                        <div class="sidebar-item recent-posts">
                            <?php
                            $i = 0;
                            foreach ($getFasum as $fasum) :
                                // var_dump($fasum);
                                // die;
                                if (++$i == 9) break;
                            ?>
                                <div class="post-item clearfix">
                                    <img src="<?= url_api() . $fasum['image_fasum'] ?>" alt="">
                                    <h4><a href="<?= base_url('pelayanan/detail/' . $fasum['id']) ?>"><?= $fasum['name_fasum'] ?></a></h4>
                                    <time datetime="2020-01-01"><?= substr($detail['open_time'], 0, 5) ?> - <?= substr($detail['close_time'], 0, 5) ?></time>
                                </div>
                            <?php endforeach; ?>
                            <div class="row mt-3">
                                <a href="<?= base_url() ?>pelayanan/pariwisata" class="btn btn-primary">Wisata Lainnya</a>

                            </div>

                        </div><!-- End sidebar recent posts-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Single Section -->

</main><!-- End #main -->