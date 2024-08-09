
<?php

session_start();
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

        if ($cargo_sesion == "CLIENTE"){
          header('Location: '.$URL.'/');
         
          }
    }
}else{
//echo "no ha pasado por el login";
header('Location: '.$URL.'/login');
}


?>
<style>
    .orange-text, .orange-text a, .orange-text a:hover, .orange-text i, .orange-text p {
        color: #ffffff !important;
    }
    .orange-text .nav-link.active, .orange-text .nav-link.active:hover {
        background-color: #ff7512 !important;
        border-color: #ff7512 !important;
    }
</style>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo APP_NAME;?></title>

  <!-- Enlaces a Google Fonts -->
    <!-- Para títulos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belgrano&display=swap" rel="stylesheet">

    <!-- Para textos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belgrano&family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">

    <!-- Para anuncios -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belgrano&family=Comfortaa:wght@300..700&family=Ibarra+Real+Nova:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <!-- jQuery -->
<script src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
  <!-- Libreria de mensajes Swwetalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Iconos -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo $URL;?>/admin/usuarios/login.php" class="nav-link"><?php echo APP_NAME; ?></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">

      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#1a1814">
    <!-- Brand Logo -->
    <a href="<?php echo $URL;?>/admin/usuarios/login.php" class="brand-link">
    <br>
      <img src="../logo/Logotipo3.png" alt=" Logo  " class="brand-image img-circle elevation-3" style="opacity: .8">
      <span  tyle="font-family: 'Belgrano', 'Comfortaa', sans-serif; text-align: justify; color: #ffffffclass="brand-text font-weight-light"> <?php echo APP_NAME;?> Deliciosos </span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
      <a href="#" class="d-block" style="font-family: 'Belgrano', 'Comfortaa', sans-serif; text-align: justify; color: #ffffff"><b>Bienvenido <br> <?php echo $nombre_usuario_sesion . ' ' . $apellido_paterno_sesion. ' ' . $apellido_materno_sesion; ?></b></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2"  >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item orange-text">
    <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-users"></i>
        <p>
            Usuarios
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item orange-text">
            <a href="<?php echo $URL;?>/admin/usuarios" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Listado de usuarios</p>
            </a>
        </li>
        <li class="nav-item orange-text">
            <a href="<?php echo $URL;?>/admin/usuarios/create.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Nuevo usuario</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item orange-text">
    <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-list"></i>
        <p>
            Reservas
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item orange-text">
            <a href="<?php echo $URL;?>/admin/reservas" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Listado de usuarios</p>
            </a>
        </li>
    </ul>
</li>


          <li class="nav-item">
    <a href="<?php echo $URL;?>/app/controllers/login/cerrar_sesion.php" class="nav-link active" style="background-color: gray; color: white;">
      <i class="nav-icon fas fa-door-open"></i>
      <p>
        Cerrar sesión
      </p>
    </a>
  </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
