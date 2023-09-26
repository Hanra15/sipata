<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>

  <!-- meta -->
  <meta content="SIJAB - Sistem Informasi Jalan Kota Bogor" name="description">
  <meta content="SIJAB - Sistem Informasi Jalan Kota Bogor" name="keywords">
  <meta content="Sistem Informasi" name="subject">
  <meta content="Indonesia" name="languange">
  <meta content="Global" name="coverage">
  <meta content="general" name="rating">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-403TSSELS0"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-403TSSELS0');
  </script>

  <!-- icon tab -->
  <link href="<?= base_url() ?>assets/img/logo/logo-brand.png" rel="icon">
  <link href="<?= base_url() ?>assets/img/logo/logo-brand.png" rel="apple-touch-icon">

  <!-- integrate -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/css/add-on.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/css/style-template.css" rel="stylesheet">

  <!-- script vendor -->
  <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>assets/dashboard/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/dashboard/vendor/dropify/js/dropify.js"></script>

  <!-- leaflet -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/leaflet/leaflet.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/leaflet-routing-machine/dist/leaflet-routing-machine.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/MarkerCluster.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/MarkerCluster.Default.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/L.Control.Locate.min.css">

  <link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css" />
  <link rel='stylesheet' href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' />
  <link rel='stylesheet' href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' />

  <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/vendor/DataTables/datatables.min.css">

  <script src="<?= base_url() ?>assets/vendor/leaflet/leaflet.js"></script>
  <script src="<?= base_url() ?>assets/vendor/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
  <script src="<?= base_url(); ?>assets/js/leaflet.markercluster.js"></script>
  <script src="<?= base_url(); ?>assets/js/L.Control.Locate.min.js"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEY9jbE_zL8SV7c6meCf7-lV3JLcbKnlY" async defer></script>
  <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
  <script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>
  <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
  <script src="https://unpkg.com/leaflet.gridlayer.googlemutant@latest/dist/Leaflet.GoogleMutant.js"></script>

  <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-map.js?key=ck2OXUAJsF0iz999XGQ62jyXo8AXOVp7"></script>
  <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-traffic.js?key=ck2OXUAJsF0iz999XGQ62jyXo8AXOVp7"></script>

</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo me-auto me-lg-0"><img src="<?= base_url() ?>assets/img/logo/logo-brand.png" alt="" class="img-fluid"></a>
      <h1 class="logo me-auto"><a href="index.html"><span>SI</span>PATA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.html" class="active">Beranda</a></li>

          <!-- <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li> -->

          <li><a href="<?= base_url() ?>pelayanan/peta">Pariwisata</a></li>
          <li><a href="portfolio.html">Tentang</a></li>
          <li><a href="contact.html">Kontak</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <!-- <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a> -->
        <p class="mb-0 ms-3" href="#"><?php echo format_indoHari(date('Y-m-d')) ?></p>
      </div>

    </div>
  </header><!-- End Header -->



  <?php echo $contents; ?>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SIPATA</h3>
            <p>
              Sistem informasi Pariwisata Tanggerang<br>
              Kabupten Tanggerang<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Link</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pariwisata</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <!-- <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul> -->
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <img class="img-fluid" src="<?= base_url() ?>assets/img/logo/logo.png" alt="">
            <!-- <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> -->
          </div>

        </div>
      </div>
    </div>


  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url() ?>assets/dashboard/vendor/DataTables/datatables.min.js"></script>

  <!-- Template Main JS File -->
  <!-- <script src="<?= base_url() ?>assets/js/main.js"></script> -->
  <script src="<?= base_url() ?>assets/js/main-template.js"></script>

</body>

</html>