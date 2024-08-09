<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');

$id_usuario = $_GET['id_usuario'];
include ('../../app/controllers/usuarios/datos_del_usuario.php');
?>

    <br>
    <div class="container-fluid">

        <h1>Datos del usuario <?php echo $id_usuario;?></h1>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-primary">
                    <div class="card-header">

                        <h3 class="card-title"><b>Datos registrados</b></h3>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nombre </label>
                                        <input type="text" value="<?php echo $nombre; ?>" name="nombre" class="form-control" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Apellido apellido_paterno</label>
                                        <input type="text" value="<?php echo $apellido_paterno; ?>" name="apellido_paterno" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Apellido_materno</label>
                                        <input type="text" value="<?php echo $apellido_materno; ?>" name="apelllido_materno" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Correo</label>
                                        <input type="email" class="form-control" value="<?php echo $correo; ?>" disabled>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Cargo</label>
                                        <input type="text" class="form-control" value="<?php echo $cargo; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include ('../../admin/layout/parte2.php');
include ('../../admin/layout/mensaje.php');
