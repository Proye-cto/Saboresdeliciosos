<?php

session_start();
if(isset($_SESSION['sesion_email'])){
  //echo"Ha pasado por el login";

}
else{
  //echo "no ha pasado por el login";
}
include ('../app/config.php');
include ('../admin/layout/mensaje.php'); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo APP_NAME;?> </title>

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

  <!-- Font Awesome -->
  <link rel="stylesheet" href=" <?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href=" <?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=" <?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/index2.html"></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
    <p class="login-box-msg"><center><b><h3 style="font-family: 'Belgrano', sans-serif; color: #ff7512;">Inicia Sesion</b></h3></center></p>
        <img src="../Public/images/logo/Logo2.png" width="100%" alt="">
      <p class="login-box-msg" style="font-family: 'Comfortaa', sans-serif; color: #59554e;">Ingresa tus datos</p>

      <form action="<?php echo $URL;?>/app/controllers/login/controller_login.php" method="post"> <!-- Lainfomacion que exsite en el formulario se ira a esta ruta-->
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Correo">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary" style="width: 100%; background-color: #ff7512; color: #ffffff; border: none; outline: none;">Ingresar</button>



        <br><br>
        <a href="<?php echo $URL;?>/index.php" class="btn btn-secondary"  style="width: 100%; background-color: #73797a; color: #ffffff; border: none; outline: none;"> Regresar </a>
      </form>


      <!-- /.social-auth-links -->

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $URL;?>/public/templeates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
