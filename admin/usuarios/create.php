

<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php'); ?>

    <br>
    <div class="container-fluid">

        <h1>Creación de un nuevo usuario</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><b>Datos del usuario</b></h3>
                    </div>
                    <div class="card-body">
                    
                   
                        <form action="../../app/controllers/usuarios/create.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nombre <b>*</b></label>
                                        <input type="text" name="nombre" class="form-control" required>
                                    </div>
                                </div>
                              <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Apellido Paterno <b>*</b></label>
                                        <input type="text" name="apellido_paterno" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Apellido Materno<b>*</b></label>
                                        <input type="text" name="apellido_materno" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Correo electronico <b>*</b></label>
                                        <input type="email" name="correo" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Contraseña <b>*</b></label>
                                        <input type="password" name="contrasena" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Verificar contraseña <b>*</b></label>
                                        <input type="password" name="contrasena_verify" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Cargo</label>
                                        <select name="cargo" id="" CLASS="form-control">
                                            <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                            <option value="CLIENTE">CLIENTE</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="" class="btn btn-secondary">Cancelar</a>
                                    <input type="submit" class="btn btn-primary" value="Registrar usuario">
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
