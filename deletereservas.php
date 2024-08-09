<?php
// Incluir configuraciones y partes del layout
include('app/config.php');
include('layout/parte1.php');
include('app/Controllers/Reservas/listadores.php');

// Obtener el ID de la reserva desde la URL
$id_reserva = $_GET['id_reserva'];

// Incluir el archivo que obtiene los datos de la reserva
include('app/Controllers/Reservas/datos_reserva.php');
?>

<style>
    .custom-header {
        background-color: #fff; /* Color personalizado */
        color: white;
    }
    
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

</style>

<br><br><br><br><br><br>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-outline">
                <div class="card-header custom-header">
                    <h3 class="card-title"><b>¿Está seguro de eliminar esta reserva?</b></h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="color: #000" for="nombre_usuario">Nombre del usuario</label>
                                <input type="text" id="nombre_usuario" value="<?php echo htmlspecialchars($nombre_usuario); ?>" name="nombre_usuario" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="color: #000" for="nombre_mascota">Mensaje</label>
                                <input type="text" id="mensaje" value="<?php echo htmlspecialchars($mensaje); ?>" name="mensaje" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="color: #000" for="fecha_cita">Fecha de la cita</label>
                                <input type="text" id="fecha_cita" value="<?php echo htmlspecialchars($fecha_cita); ?>" name="fecha_cita" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label style="color: #000" for="hora_cita">Hora de la cita</label>
                                <input type="text" id="hora_cita" class="form-control" value="<?php echo htmlspecialchars($hora_cita); ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <form action="<?php echo htmlspecialchars($URL); ?>/app/Controllers/Reservas/delete.php" method="post">
                        <input type="hidden" value="<?php echo htmlspecialchars($id_reserva); ?>" name="id_reserva">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="reservasus.php" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-bot"><i class="fas fa-trash"></i> Eliminar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br>

<?php 
// Incluir la parte final del layout y mensajes de admin
include('layout/parte2.php');
include('admin/layout/mensaje.php');
?>
