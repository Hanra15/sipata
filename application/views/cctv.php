<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('../assets/img/background-hero.png');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8 text-center">
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

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team pt-0">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row mt-3 justify-content-center" data-aos="fade-up" data-aos-delay="100">

                <?php

                $i = 0;
                foreach ($getCCTV as $cctv) :
                    // var_dump($berita);
                    // die;
                    // if (++$i == 11) break;

                ?>
                    <div class="col-sm-3 col-md-3 px-0 border border-3 border-dark">
                        <h5 class="font-size-9 mb-0 " style="background-color: blue;"><a href="#" class="text-white"><?= $cctv['name_cctv'] ?></a> </h5>
                        <?php
                        if (strpos($cctv['link_cctv'], 'https://restreamer.kotabogor.go.id/')  !== false) {
                        ?>
                            <a href="<?= $cctv['link_cctv'] ?>">
                                <video id="cctv-video-<?= $cctv['id'] ?>" autoplay src="<?= $cctv['link_cctv'] ?>" style="width: 100%; height:350.25px" controls></video>
                            </a>
                            <script>
                                var videoUrl = "<?= $cctv['link_cctv'] ?>";
                                var video = document.getElementById("cctv-video-<?= $cctv['id'] ?>");

                                if (Hls.isSupported()) {
                                    var hls = new Hls();
                                    hls.loadSource(videoUrl);
                                    hls.attachMedia(video);
                                } else if (video.canPlayType("application/vnd.apple.mpegurl")) {
                                    video.src = videoUrl;
                                } else {
                                    video.innerHTML = "Maaf, browser Anda tidak mendukung pemutaran video.";
                                }
                            </script>
                        <?php } else { ?>
                            <a href="<?= $cctv['link_cctv'] ?>" class="glightbox" data-type="image" data-id="cctv-<?= $cctv['id'] ?>">
                                <img class="img-fluid" id="cctv-<?= $cctv['id'] ?>" src="<?= $cctv['link_cctv'] ?>" alt="" style="width: 100%; height:350.25px">
                            </a>
                            <script>
                                $(document).ready(function() {
                                    const preloader = document.querySelector('#preloaderss');
                                    if (preloader) {
                                        window.addEventListener('load', () => {
                                            preloader.remove();
                                        });
                                    }
                                    window.setInterval(function() {
                                        var d = new Date()
                                        $(`#cctv-<?= $cctv['id'] ?>`).attr("src", '<?= $cctv['link_cctv'] ?>' + d.getTime());
                                    }, 750)


                                })
                            </script>
                        <?php } ?>


                    </div>



                <?php endforeach; ?>



            </div>

        </div>
    </section><!-- End Our Team Section -->



</main><!-- End #main -->