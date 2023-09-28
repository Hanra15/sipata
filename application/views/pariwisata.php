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

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Wisata Kab. Tanggerang</h2>
            </div>

            <div class="row">
                <?php
                $i = 0;
                foreach ($getFasum as $wisata) :
                    if ($wisata['category_fasum']['id'] == 1) :

                ?>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box iconbox-blue">
                                <img src="<?= url_api() . $wisata['image_fasum'] ?>" class="img-fluid" alt="">
                                <div class="container-fluid">
                                    <h4><a href=""><?= $wisata['name_fasum'] ?></a></h4>
                                    <p><?= $wisata['address'] ?></p>
                                    <hr>
                                    <a href="<?= base_url() ?>pelayanan/detail/<?= $wisata['id'] ?>" class="btn btn-primary w-100">Lihat wisata</a>

                                </div>
                            </div>
                        </div>

                    <?php
                    endif
                    ?>

                <?php
                endforeach
                ?>
            </div>

            <div class="section-title mt-5">
                <h2>Penginapan</h2>
            </div>

            <div class="row">
                <?php
                $i = 0;
                foreach ($getFasum as $penginapan) :
                    if ($penginapan['category_fasum']['id'] == 2) :

                ?>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box iconbox-blue">
                                <img src="<?= url_api() . $penginapan['image_fasum'] ?>" class="img-fluid" alt="">
                                <div class="container-fluid">
                                    <h4><a href=""><?= $penginapan['name_fasum'] ?></a></h4>
                                    <p><?= $penginapan['address'] ?></p>
                                    <hr>
                                    <a href="<?= base_url() ?>pelayanan/detail/<?= $penginapan['id'] ?>" class="btn btn-primary w-100">Lihat wisata</a>

                                </div>
                            </div>
                        </div>

                    <?php
                    endif
                    ?>

                <?php
                endforeach
                ?>
            </div>

        </div>
    </section><!-- End Services Section -->



</main><!-- End #main -->