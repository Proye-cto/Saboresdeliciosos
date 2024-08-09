<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');

$id_usuario = $_GET['id_usuario'];
include ('../../app/controllers/usuarios/datos_del_usuario.php');
?>

    <br>
    <div class="container-fluid">

        <h1>Datos del usuario</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-danger">
                    <div class="card-header">

                        <h3 class="card-title"><b>¿Esta seguro de eliminar a este usuario?</b></h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input type="text" value="<?php echo $nombre; ?>" name="nombre" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Apellido Materno</label>
                                    <input type="text" value="<?php echo $apellido_materno; ?>" name="apellido_materno" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Apellido Paterno</label>
                                    <input type="text" value="<?php echo $apellido_paterno; ?>" name="apellido_paterno" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Correo electronico</label>
                                    <input type="email" value="<?php echo $correo; ?>" name="correo" class="form-control" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Cargo</label>
                                    <input type="text" class="form-control" value="<?php echo $cargo; ?>" disabled>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <form action="<?php echo $URL;?>/app/controllers/usuarios/delete.php" method="post">
                                        <input type="text" value="<?php echo $id_usuario;?>" name="id_usuario" hidden>
                                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Borrar</button>
                                    </form>
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
?>
