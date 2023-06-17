<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center ">
  <div class="container d-flex justify-content-between align-items-center">

    <div class="logo">
      <h1 class="text-light"><a href="GUI_Principal.php"><span>Easy Health</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="active " href="GUI_Principal.php">Inicio</a></li>
        <li><a href="GUI_Doctores.php">Doctores</a></li>
        <li><a href="GUI_Establecimiento.php">Establecimientos</a></li>
        <li class="dropdown"><a href="#"><span>Especialidades</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Nefrología</a></li>
            <li><a href="#">Cardiología</a></li>
            <li><a href="#">Pediatría</a></li>
            <li><a href="#">Dermatología</a></li>
          </ul>
        </li>
        <li><a href="GUI_Emergencia.php">Emergencias</a></li>
        <li class="dropdown"><a href="#"><span>Extras</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="./GUI_SegurosMedicos.php">Seguros Médicos</a></li>
            <li><a href="./GUI_Farmacia.php">Farmacia</a></li>
          </ul>
        </li>
        <li><a href="GUI_IniciarSesion.php">Iniciar Sesión</a></li>
        <li><a href="GUI_Perfil.php">
            <?php
            session_start();
            echo isset($_SESSION['nombreUsuario']) ? $_SESSION['nombreUsuario'] : '';
            ?>
          </a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header>
<!-- End Header -->