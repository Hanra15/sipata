<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/logo/logo-brand.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/logo/logo-brand.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7578bc87e1.js" crossorigin="anonymous"></script>

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/dashboard/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/dashboard/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/dashboard/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/dashboard/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/dashboard/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/dashboard/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/dashboard/vendor/dropify/css/dropify.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/dashboard/vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/dashboard/css/style.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/vendor/dropify/js/dropify.js"></script>

</head>

<body class="toggle-sidebar">

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center justify-content-between">
        <a href="<?= base_url() ?>cctv" class="btn btn-secondary d-flex align-items-center">
            <i class="bi bi-arrow-left-circle me-2"></i> Kembali
        </a>



        <a href="<?= base_url() ?>dashboard" class="logo d-flex justify-content-center">
            <img src="<?= base_url() ?>assets/img/logo/logo.png" alt="" style="margin-left: 100%;">
        </a>



        <nav class="header-nav">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-4">

                    <!-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <?php echo format_indoHari(date('Y-m-d')) ?>
                    </a> -->
                    <p class="text-white mb-0"><?php echo format_indoHari(date('Y-m-d')) ?></p>

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown pe-4">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="<?= base_url() ?>assets/dashboard/img/admin/admin.png" alt="Profile" class="rounded-circle border">
                        <span class="d-none d-md-block dropdown-toggle ps-4"><?= $admin ?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?= $admin ?></h6>

                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?= base_url() ?>profil">
                                <i class="bi bi-person"></i>
                                <span>Profil</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?= base_url() ?>logout">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->



    <main id="main" class="main p-0" style="
        background-image: url('../../assets/img/background-full.png'); 
        height:100%;
        background-position: center;
        ">
        <div class="container-fluid">
            <section class="section">
                <div class="row justify-content-center">
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
            </section>

        </div>

    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer" style="background-image: url(../../assets/dashboard/img/admin/background-admin.png); border-top: 1px solid #000000;">
        <div class="copyright text-white">
            <strong><span>SIJAB</span></strong> - Sistem Informasi Jalan Raya Kota Bogor
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloaderss"></div>

    <!-- Vendor JS Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
    <script scr="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore.js"></script>

    <script src="<?= base_url() ?>assets/dashboard/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/vendor/chart.js/chart.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/vendor/echarts/echarts.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/vendor/quill/quill.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/vendor/sweetalert2/sweetalert2.min.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"></script> -->




    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/dashboard/js/admin_main.js"></script>

</body>

</html>