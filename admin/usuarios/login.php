<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');
include ('../../app/controllers/usuarios/listado_de_usuarios.php');
include ('../../app/controllers/Reservas/listado.php');
?>
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

<br>
<h2><a style="font-family: 'Belgrano', sans-serif; color: #F2AE30;">Bienvenido al Sistema - <?= $cargo_sesion; ?></h2>
<hr></a>
<div class="container-fluid" >
  <div class="row">
    <div class="col-lg-3 col-6">
      <div class="small-box bg-success">
        <div class="inner">
        <?php
          $contador_de_usuarios = 0;
          foreach ($usuarios as $usuario)
          {
            $contador_de_usuarios = $contador_de_usuarios +1;
          }
          ?>
          <h3><?= $contador_de_usuarios; ?></h3>
          <p>Usuarios registrados</p>
        </div>
        <div class="icon">
          <i class="bi bi-person-square"></i>
        </div>
        <a href="<?= $URL . "/admin/usuarios"; ?>" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>


    <div class="col-lg-3 col-6">
      <div class="small-box bg-primary">
        <div class="inner">

          <?php
          $contador_de_reservas = 0;
          foreach ($reservas as $reserva)
          {
            $contador_de_reservas = $contador_de_reservas +1;
          }
          ?>
          <h3><?= $contador_de_reservas; ?></h3>
          <p>Reservas registradas</p>
        </div>
        <div class="icon">
        <i class="bi bi-calendar-check-fill"></i>
        </div>
        <a href="<?= $URL . "/admin/Reservas"; ?>" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
</div>

<?php include ('../../admin/layout/parte2.php'); ?>
