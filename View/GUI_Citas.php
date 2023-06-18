!DOCTYPE html>
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
      <h1>Citas médicas</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index1.html">Menú</a></li>
          <li class="breadcrumb-item">Citas médicas</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Agendar cita médica</h5>

              <!-- Bordered Tabs Justified -->
              <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home" aria-selected="true">Agendar</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Modificar</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Cancelar</button>
                </li>
              </ul>
              <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                <div class="tab-pane fade show active" id="bordered-justified-home" role="tabpanel" aria-labelledby="home-tab">
                  <h5 class="card-title">Agendar cita médica</h5>

                  <!-- General Form Elements -->
                  <form action="../Controller/Oyente_Citas.php" method="POST">
                    <div class="row mb-3">
                      <label for="inputDate" class="col-sm-2 col-form-label">Fecha:</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" name="fecha">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputTime" class="col-sm-2 col-form-label">Horario:</label>
                      <div class="col-sm-10">
                        <input type="time" class="form-control" name="horario">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Establecimiento:</label>
                      <div class="col-sm-10">
                        <select class="form-select" multiple aria-label="multiple select example" name="establecimiento" id="establecimientos-select">
                          <option selected>Elige un establecimento</option>
                          <!--<option value="El ABC">El ABC</option>
                          <option value="El Angeles">El Angeles</option>
                          <option value="El Star medica">El Star medica</option>
                          <option value="El IMSS">El IMSS</option>-->

                          <?php
                          include '../Model/Gestor_Citas.php';

                          $gestorCitas = new Gestor_Citas();
                          $gestorCitas->mostrarEstablecimientos();
                          ?>

                        </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Doctor:</label>
                      <div class="col-sm-10">
                        <select class="form-select" multiple aria-label="multiple select example" name="doctores" id="doctores-select">
                          <option selected>Elige un doctor</option>


                          <option value="El ABC">Juan</option>
                          <option value="El Angeles">Maximiliano</option>
                          <option value="El Star medica">Diego</option>
                          <option value="El IMSS">Ansu</option>






                        </select>
                      </div>
                    </div>

                    <div class="row mb-6">
                      <div align="right">
                        <button type="submit" class="btn btn-primary">Agendar</button>
                      </div>
                    </div>

                  </form><!-- End General Form Elements -->

                </div>
                <div class="tab-pane fade" id="bordered-justified-profile" role="tabpanel" aria-labelledby="profile-tab">
                  <h5 class="card-title">Modificar cita médica</h5>
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                      <option selected>Selecciona una opción</option>
                      <option value="1">16/01/2023 - 9:00</option>
                      <option value="2">18/01/2023 - 12:00</option>
                      <option value="3">27/01/2023 - 20:00</option>
                    </select>
                    <label for="floatingSelect">Cita a modificar</label>
                  </div>
                  <!-- General Form Elements -->
                  <form>
                    <div class="row mb-3">
                      <label for="inputDate" class="col-sm-2 col-form-label">Fecha:</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputTime" class="col-sm-2 col-form-label">Horario:</label>
                      <div class="col-sm-10">
                        <input type="time" class="form-control">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Doctor:</label>
                      <div class="col-sm-10">
                        <select class="form-select" multiple aria-label="multiple select example">
                          <option selected>Elige un doctor</option>
                          <option value="1">Walter White</option>
                          <option value="2">Sarah Jhonson</option>
                          <option value="3">William Anderson</option>
                        </select>
                      </div>
                    </div>

                    <div class="row mb-6">
                      <div align="right">
                        <button type="submit" class="btn btn-primary">Modificar</button>
                      </div>
                    </div>

                  </form><!-- End General Form Elements -->
                </div>
                <div class="tab-pane fade" id="bordered-justified-contact" role="tabpanel" aria-labelledby="contact-tab">
                  <h5 class="card-title">Cancelar cita</h5>

                  <!-- List group With Checkboxes and radios -->
                  <div class="col-sm-10">
                    <ul class="list-group">
                      <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        16/01/2023 - 9:00
                      </li>
                      <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        16/01/2023 - 17:00
                      </li>
                      <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        18/01/2023 - 12:00
                      </li>
                      <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        22/01/2023 - 7:00
                      </li>
                      <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        27/01/2023 - 20:00
                      </li>
                    </ul>
                  </div>
                  <div class="row mb-6">
                    <div align="right">
                      <button type="submit" class="btn btn-primary">Cancelar</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Bordered Tabs Justified -->
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