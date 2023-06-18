<?php
session_start();
$nombreUsuario = isset($_SESSION['nombreUsuario']) ? $_SESSION['nombreUsuario'] : '';
$apellidoUsuario = isset($_SESSION['apellidoUsuario']) ? $_SESSION['apellidoUsuario'] : '';
$correoUsuario = isset($_SESSION['correoUsuario']) ? $_SESSION['correoUsuario'] : '';
$contraseña = isset($_SESSION['correoUsuario']) ? $_SESSION['correoUsuario'] : '';
$telefonoUsuario = isset($_SESSION['telefonoUsuario']) ? $_SESSION['telefonoUsuario'] : '';
$direccionUsuario = isset($_SESSION['direccionUsuario']) ? $_SESSION['direccionUsuario'] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Easy Health</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style1.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style1.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php
  include 'header1.php';
  ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Perfil</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="GUI_MenuPaciente">Home</a></li>
          <li class="breadcrumb-item">Perfil</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2>
                <?php
                echo isset($_SESSION['nombreUsuario']) ? $_SESSION['nombreUsuario'] : ' ';
                echo " ";
                echo isset($_SESSION['apellidoUsuario']) ? $_SESSION['apellidoUsuario'] : '';
                ?>
              </h2>

            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Consultar</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Modificar</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                  <h5 class="card-title">Información del Perfil</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nombre</div>
                    <div class="col-lg-9 col-md-8">
                      <?php
                      echo isset($_SESSION['nombreUsuario']) ? $_SESSION['nombreUsuario'] : ' ';
                      echo " ";
                      echo isset($_SESSION['apellidoUsuario']) ? $_SESSION['apellidoUsuario'] : '';
                      ?></div>
                    </h2>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Dirección</div>
                    <div class="col-lg-9 col-md-8">
                      <?php
                      echo isset($_SESSION['direccionUsuario']) ? $_SESSION['direccionUsuario'] : '';
                      ?>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Telefono</div>
                    <div class="col-lg-9 col-md-8">
                      <?php
                      echo isset($_SESSION['telefonoUsuario']) ? $_SESSION['telefonoUsuario'] : '';
                      ?>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">
                      <?php
                      echo isset($_SESSION['correoUsuario']) ? $_SESSION['correoUsuario'] : '';
                      ?>
                    </div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <?php
                  include 'formPaciente.php';
                  include 'formDoctor.php';
                  ?>

                </div>
              </div><!-- End Bordered Tabs -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php
  include 'footer1.php';
  ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>