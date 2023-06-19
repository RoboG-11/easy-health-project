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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.11.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php
  include 'header.php';
  ?>

  <main id="main">

    <!-- ======= Pharmacy section ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Farmacia</h2>
          <!-- <ol>
            <li>
              <a href="#">Medicamentos</a>
            </li>
            <li>
              <a href="#">Vitaminas y suplementos</a>
            </li>
            <li>
              <a href="#">Salud sexual</a>
            </li>
            <li>
              <a href="#">Belleza e higiene</a>
            </li>
            <li>
              <a href="#">Bebés</a>
            </li>
          </ol> -->
          <div class="cartContainer">
            <!-- <p>asdasd</p> -->
            <!-- <a href="./GUI_Carrito.php"> -->
            <!-- <img src="assets/img/products/product-1.png" alt="product" class="img-fluid"> -->
            <!-- </a> -->
            <a href="GUI_Carrito.php">
              <img type="button" src="./assets/img/cart.svg" class="cart" alt="cart">
            </a>
            <p>0</p>
          </div>
        </div>

      </div>
    </section><!-- End Pharmacy section -->

    <!-- ======= Medicines section ======= -->
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-12 col-md-6 col-lg-4 pb-5">
            <div class="style-card d-flex flex-column justify-content-center align-items-center gap-4 shadow-lg rounded-3">
              <img src="Medicamentos/picot">
                <input class="m-0 fw-bold fs-5" type="hidden" name="nombre" value="Sal de uvas picot Polvo Efervescente">
                <p class="m-0 fw-bold fs-5">Sal de uvas picot Polvo Efervescente</p>
                <span class="m-0 fw-light">Polvo Sobre Bicarbonato de sodio 2.485 G</span>
                <p class="price-medicine m-0 fw-bold fs-5">$36.00 MXN</p>
                <form action="../Controller/Oyente_Carrito.php" method="POST">
                  <input type="hidden" name="producto" value="Sal de uvas picot Polvo Efervescente">
                  <button class="btn btn-primary">Añadir al carrito</button>
                </form>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 pb-5">
            <div class="style-card d-flex flex-column justify-content-center align-items-center gap-4 shadow-lg rounded-3">
              <img src="Medicamentos/tempra">
              <p class="m-0 fw-bold fs-5">Tempra</p>
              <span class="m-0 fw-light">Tableta Caja Paracetamol 500 MG</span>
              <p class="price-medicine m-0 fw-bold fs-5">$55.00 MXN</p>
              <form action="../Controller/Oyente_Carrito.php" method="POST">
                <input type="hidden" name="producto" value="Tempra">
                <button class="btn btn-primary" type="submit">Añadir al carrito</button>
              </form>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 pb-5">
            <div class="style-card d-flex flex-column justify-content-center align-items-center gap-4 shadow-lg rounded-3">
              <img src="Medicamentos/silkaMedic">
              <p class="m-0 fw-bold fs-5">Silka Medic Gel para Pie de Atleta</p>
              <span class="m-0 fw-light">30 G Gel Tubo Terbinafina 1 G</span>
              <p class="price-medicine m-0 fw-bold fs-5">$123.50 MXN</p>
              <form action="../Controller/Oyente_Carrito.php"  method="POST">
                <input type="hidden" name="producto" value="Silka Medic Gel para Pie de Atleta">
                <button class="btn btn-primary">Añadir al carrito</button>
              </form>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 pb-5">
            <div class="style-card d-flex flex-column justify-content-center align-items-center gap-4 shadow-lg rounded-3">
              <img src="Medicamentos/proteina">
              <p class="m-0 fw-bold fs-5">Falcon Proteína Orgánica Vainilla</p>
              <span class="m-0 fw-light">1.17 KG Polvo Bote</span>
              <p class="price-medicine m-0 fw-bold fs-5">$1,069.00 MXN</p>
              <form action="../Controller/Oyente_Carrito.php" method="POST">
                <input type="hidden" name="producto" value="Falcon Proteína Orgánica Vainilla">
                <button class="btn btn-primary">Añadir al carrito</button>
              </form>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 pb-5">
            <div class="style-card d-flex flex-column justify-content-center align-items-center gap-4 shadow-lg rounded-3">
              <img src="Medicamentos/glucometro">
              <p class="m-0 fw-bold fs-5">Contour Plus Diabetes Glucometro</p>
              <span class="m-0 fw-light">1 Pieza Caja</span>
              <p class="price-medicine m-0 fw-bold fs-5">$399.00 MXN</p>
                <form action="../Controller/Oyente_Carrito.php" method="POST">
                  <input type="hidden" name="producto" value="Contour Plus Diabetes Glucometro">
                  <button class="btn btn-primary">Añadir al carrito</button>
                </form>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 pb-5">
            <div class="style-card d-flex flex-column justify-content-center align-items-center gap-4 shadow-lg rounded-3">
              <img src="Medicamentos/pañales">
              <p class="m-0 fw-bold fs-5">Bbtips Pañales unisex Etapa 4</p>
              <span class="m-0 fw-light">40 Piezas Bolsa</span>
              <p class="price-medicine m-0 fw-bold fs-5">$170.00 MXN</p>
              <form action="../Controller/Oyente_Carrito.php" method="POST">
                <input type="hidden" name="producto" value="Bbtips Pañales unisex Etapa 4">
                <button class="btn btn-primary">Añadir al carrito</button>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Medicines section -->

  </main><!-- End #main -->

  <?php
  include 'footer.php';
  ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>