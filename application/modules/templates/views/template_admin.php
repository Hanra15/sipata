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
    <!-- <link href="<?= base_url() ?>assets/dashboard/vendor/simple-datatables/style.css" rel="stylesheet"> -->
    <link href="<?= base_url() ?>assets/dashboard/vendor/dropify/css/dropify.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/dashboard/vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/vendor/DataTables/datatables.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/dashboard/css/style.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/vendor/dropify/js/dropify.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>


    <!-- leaflet -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/leaflet/leaflet.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/leaflet-routing-machine/dist/leaflet-routing-machine.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/MarkerCluster.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/MarkerCluster.Default.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/L.Control.Locate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css" />
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' rel='stylesheet' />
    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />
    <link rel="stylesheet" href="//unpkg.com/leaflet-gesture-handling/dist/leaflet-gesture-handling.min.css" type="text/css">

    <script src="<?= base_url() ?>assets/vendor/leaflet/leaflet.js"></script>
    <script src="<?= base_url() ?>assets/vendor/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
    <script src="<?= base_url(); ?>assets/js/leaflet.markercluster.js"></script>
    <script src="<?= base_url(); ?>assets/js/L.Control.Locate.min.js"></script>

    <script src="//unpkg.com/leaflet-gesture-handling"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>
    <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js'></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEY9jbE_zL8SV7c6meCf7-lV3JLcbKnlY" async defer></script>
    <script src="https://unpkg.com/leaflet.gridlayer.googlemutant@latest/dist/Leaflet.GoogleMutant.js"></script>

    <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-map.js?key=ck2OXUAJsF0iz999XGQ62jyXo8AXOVp7"></script>
    <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-traffic.js?key=ck2OXUAJsF0iz999XGQ62jyXo8AXOVp7"></script>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="<?= base_url() ?>dashboard" class="logo d-flex align-items-center">
                <img src="<?= base_url() ?>assets/img/logo/logo.png" alt="">
                <!-- <span class="d-none d-lg-block">SIJAB</span> -->
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
            <div class="pagetitle mb-0 ps-3">
                <h1 class="text-white"><?= $head ?></h1>
            </div><!-- End Page Title -->

        </div><!-- End Logo -->



        <nav class="header-nav ms-auto">
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

                        <!-- <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?= base_url() ?>profil">
                                <i class="bi bi-person"></i>
                                <span>Profil</span>
                            </a>
                        </li> -->
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

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-heading">Data</li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>news">
                    <i class="bi bi-newspaper"></i>
                    <span>Berita</span>
                </a>
            </li><!-- End berita Page Nav -->

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>cctv">
                    <i class="bi bi-webcam-fill"></i>
                    <span>CCTV</span>
                </a>
            </li><!-- End User Page Nav -->

            <li class="nav-heading">Pelayanan Publik</li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>polantas">
                    <i class="fas fa-shield-alt"></i>
                    <span>Polantas</span>
                </a>
            </li><!-- End Pos Page Nav -->

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>fasum">
                    <i class="bi bi-building"></i>
                    <span>Fasilitas Umum</span>
                </a>
            </li><!-- End Pos Page Nav -->

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>trayek">
                    <i class="fa-solid fa-route"></i>
                    <span>Trayek</span>
                </a>
            </li><!-- End Pos Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <?php $this->load->view($page_content) ?>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            <strong><span>SIJAB</span></strong> - Sistem Informasi Jalan Raya Kota Bogor
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

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
    <!-- <script src="<?= base_url() ?>assets/dashboard/vendor/datatables.net/js/jquery.dataTables.min.js"></script> -->
    <script src="<?= base_url() ?>assets/dashboard/vendor/DataTables/datatables.min.js"></script>
    <!-- <script src="<?= base_url() ?>assets/dashboard/vendor/simple-datatables/simple-datatables.js"></script> -->
    <script src="<?= base_url() ?>assets/dashboard/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/vendor/sweetalert2/sweetalert2.min.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"></script> -->




    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/dashboard/js/admin_main.js"></script>

</body>

</html>