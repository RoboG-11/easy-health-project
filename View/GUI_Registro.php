<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Regístrate</title>
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

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="GUI_Principal.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Easy Health</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Crea una cuenta</h5>
                    <p class="text-center small">Ingresa tus datos para crear una cuenta:</p>
                  </div>

                  <form action= "../Controller/Oyente_Cuenta.php" method="POST" class="row g-3 needs-validation">
                  <input type="hidden" name="func" value="Registro">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Nombre:</label>
                      <input type="text" name="nombre" class="form-control" id="nombre" required>
                      <div class="invalid-feedback">Por favor ingresa tu nombre</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Apellido:</label>
                      <input type="text" name="apellido" class="form-control" id="apellido" required>
                      <div class="invalid-feedback">Por favor ingresa tu apellido</div>
                    </div>

                    <div class="col-12">
                      <label for="yourphone" class="form-label">Telefono:</label>
                      <input type="text" name="telefono" class="form-control" id="telefono" required>
                      <div class="invalid-feedback">Por favor ingresa tu telefono</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Correo electronico:</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" name="correo" class="form-control" id="correo" required>
                        <div class="invalid-feedback">Por favor elige un correo electronico</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Contraseña:</label>
                      <input type="password" name="contraseña" class="form-control" id="contraseña" required>
                      <div class="invalid-feedback">Por favor elige una contraseña</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Dirección:</label>
                      <input type="text" name="direccion" class="form-control" id="direccion" required>
                      <div class="invalid-feedback">Por favor ingresa tu direccion</div>
                    </div>

                    <fieldset class="col-12">
                    <label for="yourPassword" class="form-label">Ocupación:</label>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="rol" id="gridRadios1" value="1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Paciente
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="rol" id="gridRadios2" value="2">
                      <label class="form-check-label" for="gridRadios2">
                        Doctor
                      </label>
                    </div>  
                  </div>
                </fieldset>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Crear cuenta</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">¿Ya tienes una cuenta? <a href="GUI_IniciarSesion.php">Iniciar sesión</a></p>
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