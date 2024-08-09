<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');

$id_usuario = $_GET['id_usuario'];
include ('../../app/Controllers/usuarios/datos_del_usuario.php');

?>

    <br>
    <div class="container-fluid">

        <h1>Actualización del usuario <?php echo $nombre; ?></h1>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-success">
                    <div class="card-header">

                        <h3 class="card-title"><b>Datos del usuario</b></h3>
                    </div>
                    <div class="card-body">
                    <form action="../../app/Controllers/usuarios/update.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nombre completo <b>*</b></label>
                                        <input type="text" name="nombre" value="<?php echo $nombre;?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Apellido Paterno <b>*</b></label>
                                        <input type="text" name="apellido_paterno" value="<?php echo $apellido_paterno; ?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Apellido Materno <b>*</b></label>
                                        <input type="text" name="apellido_materno" value="<?php echo $apellido_materno; ?>" class="form-control" required>
                                    </div>
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Correo  <b>*</b></label>
                                        <input type="email" name="correo" value="<?php echo $correo; ?>" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Contraseña </label>
                                        <input type="password" name="contrasena" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Verificar contraseña</label>
                                        <input type="password" name="contrasena_verify" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Cargo</label>
                                        <select name="cargo" id="" CLASS="form-control">
                                            <?php
                                            //si
                                            if($cargo == "ADMINISTRADOR"){ ?>
                                                <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                                <option value="CLIENTE">CLIENTE</option>
                                            <?php
                                            }else{ ?>
                                                <option value="CLIENTE">CLIENTE</option>
                                                <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                             <?php
                                            }
                                            ?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <input type="text" name="id_usuario" value="<?php echo $id_usuario;?>" hidden>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="" class="btn btn-secondary">Cancelar</a>
                                    <input type="submit" class="btn btn-success" value="Actualizar usuario">
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include ('../../admin/layout/parte2.php');
include ('../../admin/layout/mensaje.php');
?>