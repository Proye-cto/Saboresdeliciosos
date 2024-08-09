<?php
include('app/config.php');
include('layout/parte1.php');
include('app/Controllers/Reservas/listadores.php');
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Belgrano&family=Comfortaa:wght@300&display=swap');

    .table thead th {
        background-color: #ff7512;
        color: #fff;
        text-align: center;
        font-family: 'Comfortaa', cursive;
    }

    .table tbody td {
        text-align: center;
        font-family: 'Comfortaa', cursive;
    }

    .btn-group .btn {
        margin: 0 2px;
    }

    .card-title {
        color: #ff7512;
        font-family: 'Belgrano', serif;
    }

    .btn-bot {
        color: #fff;
        background-color: #ff7512;
        border-color: #ff7512;
    }

    .btn-bot:hover {
        background-color: #ff7512;
        border-color: #ff7512;
    }

    .btn-bot:hover i {
        color: #fff;
    }

    .btn-bot i {
        margin-left: 5px;
    }
    
  .custom-btn:hover {
    background-color: #FF7512;
  }
        .custom-btn {
    width: 15%;
    border-radius: 20px;
    padding: 10px;
    border: none;
    cursor: pointer;
    background-color: grey;
    color: white;
    text-align: center;
    display: inline-block;
    text-decoration: none;
  }

</style>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div class="container-fluid">
    <div class="row">
        <div class="container" data-aos="fade-up">
        <div class="container" data-aos="fade-up">
      <div class="section-title">
        <div style="display: flex; align-items: center;">
    <img src="Public/images/iconos/reserva.png" width="50" height="50" class="img-fluid" alt="">
    <h2 style="margin-left: 10px;" >Reservas</h2>
        
</div>
          <p>Consulta tus  reservas </p>
        </div>

                
            </div>
            <br>
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header text-white">
                       
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Nombre del usuario</th>
                                    <th>Correo Electrónico</th>
                                    <th># Acompañantes</th>
                                    <th>Mensaje</th>
                                    <th>Fecha cita</th>
                                    <th>Hora cita</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $contador = 0;
                                if (isset($reservas) && !empty($reservas)) {
                                    foreach ($reservas as $reserva) {
                                        $contador++;
                                        $id_reserva = $reserva['id_reserva'];
                                ?>
                                    <tr>
                                        <td><?php echo $reserva['nombre_usuario'] . ' ' . $reserva['apellido_paterno_usuario'] . ' ' . $reserva['apellido_materno_usuario']; ?></td>
                                        <td><?php echo $reserva['correo_usuario']; ?></td>
                                        <td><?php echo $reserva['Servicio']; ?></td>
                                        <td><?php echo $reserva['mensaje']; ?></td>
                                        <td><?php echo $reserva['fecha_cita']; ?></td>
                                        <td><?php echo $reserva['hora_cita']; ?></td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <a href="deletereservas.php?id_reserva=<?php echo $id_reserva; ?>" class="btn btn-bot">
                                                    Cancelar <i class="bi bi-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                } else {
                                    echo '<tr><td colspan="7">No hay reservas disponibles</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <center>
                <br><br>
                <button class="custom-btn" onclick="window.history.back();">
                    <i class="bi bi-arrow-left-circle-fill"></i> Regresar
                </button>
            </center>
            <br><br><br><br><br><br>
            <?php include('layout/parte2.php'); ?>
            <?php include('admin/layout/mensaje.php'); ?>
        </div>
    </div>
</div>
