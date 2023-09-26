<main id="main" class="main">
    <div class="pagetitle">
        <h1><?= $breadcrumb ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active"><?= $breadcrumb ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <!-- <div id="map" style="height: 100px;"></div> -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <button type="button" id="btnTambah" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                                    Tambah <?= $breadcrumb; ?>
                                </button>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-row-reverse">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= base_url() ?>cctv/Cctv" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="bx bx-list-ul"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="<?= base_url() ?>cctv/Cctv/thumbnail" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="<?= base_url() ?>cctv/Cctv/fullscreen" data-bs-toggle="tooltip" data-bs-placement="top" title="FullScreen"><i class="bx bx bx-fullscreen"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <hr class="mt-0">

                        <div class="row mt-3" data-aos="fade-up" data-aos-delay="100">
                            <?php

                            $i = 0;
                            foreach ($data['getCCTV'] as $cctv) :
                                // var_dump($berita);
                                // die;
                                // if (++$i == 11) break;

                            ?>

                                <div class="col-xl-3 col-sm-6">
                                    <div class="card text-center mb-3">
                                        <div class="card-body p-0" style="background-color:#083174;">
                                            <h5 class="font-size-12 mb-1"><a href="#" class="text-white"><?= $cctv['name_cctv'] ?></a> </h5>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php
                                                    if (strpos($cctv['link_cctv'], 'https://restreamer.kotabogor.go.id/')  !== false) {
                                                    ?>
                                                        <video id="cctv-video-<?= $cctv['id'] ?>" autoplay src="<?= $cctv['link_cctv'] ?>" style="width: 100%; height:350.25px" controls></video>
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
                                                        <a class="glightbox" href="<?= $cctv['link_cctv'] ?>">
                                                            <img class="cctv-<?= $cctv['id'] ?>" src="<?= $cctv['link_cctv'] ?>" alt="" style="width: 100%; height:350.25px">
                                                        </a>
                                                        <script>
                                                            $(document).ready(function() {
                                                                window.setInterval(function() {
                                                                    var d = new Date()
                                                                    $(`.cctv-<?= $cctv['id'] ?>`).attr("src", '<?= $cctv['link_cctv'] ?>' + d.getTime());
                                                                }, 750)


                                                            })
                                                        </script>
                                                    <?php } ?>

                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>



                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>