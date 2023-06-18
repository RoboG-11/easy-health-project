<?php
session_start();
$nombreUsuario = isset($_SESSION['nombreUsuario']) ? $_SESSION['nombreUsuario'] : '';
$apellidoUsuario = isset($_SESSION['apellidoUsuario']) ? $_SESSION['apellidoUsuario'] : '';
$correoUsuario = isset($_SESSION['correoUsuario']) ? $_SESSION['correoUsuario'] : '';
$telefonoUsuario = isset($_SESSION['telefonoUsuario']) ? $_SESSION['telefonoUsuario'] : '';
$direccionUsuario = isset($_SESSION['direccionUsuario']) ? $_SESSION['direccionUsuario'] : '';
?>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="GUI_Principal.php" class="logo d-flex align-items-center">
      <img src="assets/img/logo.png" alt="">
      <span class="d-none d-lg-block">Easy Health</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div><!-- End Search Bar -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2">
            <?php

            echo isset($_SESSION['nombreUsuario']) ? $_SESSION['nombreUsuario'] : ' ';
            echo " ";
            echo isset($_SESSION['apellidoUsuario']) ? $_SESSION['apellidoUsuario'] : '';
            ?>
          </span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>
              <?php

              echo isset($_SESSION['nombreUsuario']) ? $_SESSION['nombreUsuario'] : ' ';
              echo " ";
              echo isset($_SESSION['apellidoUsuario']) ? $_SESSION['apellidoUsuario'] : '';
              ?>
            </h6>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="../Model/Logout.php">
              <i class="bi bi-box-arrow-right"></i>
              <span>Cerrar sesión</span>
            </a>
          </li>

        </ul>
    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <!-- <li class="nav-item">
        <a class="nav-link " href="GUI_MenuPaciente.php">
          <i class="bi bi-grid"></i>
          <span>Menú</span>
        </a>
      </li>End Dashboard Nav -->



    <li class="nav-item">
      <a class="nav-link collapsed" href="GUI_Citas.php">
        <i class="bi bi-calendar"></i>
        <span>Citas médicas</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="GUI_Perfil.php">
        <i class="bi bi-person"></i>
        <span>Perfil</span>
      </a>
    </li><!-- End F.A.Q Page Nav -->

    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-hospital"></i>
          <span>Emergencias</span>
        </a>
      </li>End Contact Page Nav -->

    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-geo-alt"></i>
          <span>Establecimientos</span>
        </a>
      </li>End Register Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="GUI_Pagos.php">

        <i class="bi bi-cash-coin"></i>
        <span>Pagos</span>
      </a>
    </li>

    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-prescription2"></i>
          <span>Farmacia</span>
        </a>
      </li>End Login Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="GUI_HistorialMedico.php">
        <i class="bi bi-clipboard2-pulse"></i>
        <span>Historial Medico</span>
      </a>
    </li><!-- End Error 404 Page Nav -->

  </ul>

</aside><!-- End Sidebar-->