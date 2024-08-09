
<?php

session_start();
$email_sesion = "";
if(isset($_SESSION['sesion_email'])){
//echo "ha pasado por el login";
    $email_sesion = $_SESSION['sesion_email'];
    $sql = "SELECT * FROM usuarios WHERE correo = '$email_sesion' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($usuarios as $usuario) {
        $id_usuario_sesion = $usuario['id_usuario'];
        $nombre_usuario_sesion = $usuario['nombre'];
        $apellido_paterno_sesion = $usuario['apellido_paterno'];
        $apellido_materno_sesion = $usuario['apellido_materno'];
        $cargo_sesion = $usuario['cargo'];
    }
}else{
//echo "no ha pasado por el login";
//header('Location: '.$URL.'/login');
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurante Sabores Deliciosos</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Public/img/favicon.png" rel="icon">
  <link href="Public/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Public/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="Public/vendor/aos/aos.css" rel="stylesheet">
  <link href="Public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Public/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Public/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="Public/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Public/css/style.css" rel="stylesheet">

 
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

    <a href="<?php echo $URL;?>/index.php" class="logo me-auto me-lg-0"><img src="Public/img/Favicon.png" alt="" ></a>
      <h1 class="logo me-auto me-lg-0"><a href="index.html">Restaurante Sabores Deliciosos</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <?php if ($email_sesion == "") : ?>
      <nav id="navbar" class="navbar order-last order-lg-0">
        
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo $URL;?>/index.php#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $URL;?>/index.php#about">Sobre Nosotros</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $URL;?>/menu.php">Menú</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $URL;?>/horario.php">Horario</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $URL;?>/index.php#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $URL;?>/reservas.php">Reservar</a></li>
          <li class="dropdown"><a href="#"><span>Ingresar</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
             
          <li><a class="nav-link scrollto" href="<?php echo $URL; ?>/login/index.php">Iniciar sesion</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $URL; ?>/registro.php">Registrarse</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <?php else : ?>
      <nav id="navbar" class="navbar order-last order-lg-0">
        
        <ul>
        <li><a class="nav-link scrollto active" href="<?php echo $URL;?>/index.php#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $URL;?>/index.php#about">Sobre Nosotros</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $URL;?>/menu.php">Menú</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $URL;?>/horario.php">Horario</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $URL;?>/reservasus.php">Mis reservas</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $URL;?>/reservas.php">Reservas</a></li>
          <li class="dropdown"><a href="#"><span> <?php echo $email_sesion; ?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
          <li><a class="nav-link scrollto" href="<?php echo $URL; ?>/app/controllers/login/cerrar_sesion.php">Cerrar sesión</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <?php endif; ?>

    </div>
  </header><!-- End Header -->
