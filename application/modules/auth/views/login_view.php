<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/img/logo/logo-brand.png" rel="icon">
  <link href="<?= base_url() ?>assets/img/logo/logo-brand.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <script src="https://kit.fontawesome.com/7578bc87e1.js" crossorigin="anonymous"></script>

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/dashboard/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/dashboard/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/dashboard/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/dashboard/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/dashboard/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/dashboard/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/dashboard/vendor/dropify/css/dropify.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/css/login-style.css" rel="stylesheet">

</head>

<body>

  <main style="background-image: url('assets/img/background-login.png');">
    <div class="container-fluid">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  <img src="<?= base_url() ?>assets/img/logo/logo.png" alt="" class="img-fluid">
                  <!-- <span class="d-none d-lg-block">SIJAB</span> -->
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body px-5">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">LOGIN</h5>

                  </div>

                  <form action="<?= base_url() ?>dologin" method="post" class="form row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">

                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Masukan username!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <div class="input-group mb-3">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password" aria-label="Password" aria-describedby="basic-addon1">
                        <span class="input-group-text" id="basic-addon1" onclick="password_show_hide();">
                          <i class="bi bi-eye-fill" id="show_eye" aria-hidden="true" style="display: block;"></i>
                          <i class="bi bi-eye-slash-fill" id="hide_eye" aria-hidden="true" style="display: none;"></i>
                        </span>
                      </div>
                      <div class="invalid-feedback">Masukan password!</div>
                    </div>

                    <div class="col-12 d-flex justify-content-center">
                      <?= $captcha ?>
                      <?= $script_captcha ?>
                    </div>


                    <div class="col-12 my-4">
                      <button class="btn btn-primary w-100 submit-login" type="submit">Login</button>
                    </div>

                  </form>

                </div>
              </div>



            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <script>
    function password_show_hide() {
      var x = document.getElementById("password");
      var show_eye = document.getElementById("show_eye");
      var hide_eye = document.getElementById("hide_eye");
      hide_eye.classList.remove("d-none");
      if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
      } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
      }
    }
  </script>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/dashboard/js/admin_main.js"></script>

</body>

</html>