<?php
include ('../../../app/config.php');

$id_usuario = $_POST['id_usuario'];
$nombre = $_POST['nombre'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena_verify = $_POST['contrasena_verify'];
$cargo = $_POST['cargo'];

if($contrasena == $contrasena_verify){
    // No encriptar la contraseña
    // $contrasena = password_hash($contrasena , PASSWORD_DEFAULT);
    $sentencia = $pdo->prepare("UPDATE usuarios
    SET nombre=:nombre,apellido_paterno=:apellido_paterno,apellido_materno=:apellido_materno,
        contrasena=:contrasena,
        cargo=:cargo,
        fecha_actualizacion=:fecha_actualizacion
        WHERE id_usuario = :id_usuario  ");
    $sentencia->bindParam('nombre', $nombre);
    $sentencia->bindParam('apellido_paterno', $apellido_paterno);
    $sentencia->bindParam('apellido_materno', $apellido_materno);
    $sentencia->bindParam('contrasena', $contrasena); // Contraseña sin encriptar
    $sentencia->bindParam('cargo', $cargo);
    $sentencia->bindParam('fecha_actualizacion', $fechaHora);
    $sentencia->bindParam('id_usuario',$id_usuario);

    if($sentencia->execute()){
        // La inserción en la base de datos fue exitosa
        session_start();
        $_SESSION['mensaje'] = "Se actualizó de manera correcta";
        $_SESSION['icono'] = 'success';
        $_SESSION['texto'] = 'Éxito';
        header('Location: '.$URL.'/admin/usuarios');
    } else {
        session_start();
        $_SESSION['mensaje'] = "Error: no se pudo actualizar los datos";
        $_SESSION['icono'] = 'error';
        header('Location: '.$URL.'/admin/usuarios/create.php');
    }
} else {
    // Las contraseñas no coinciden
    echo "Las contraseñas no son iguales";
    session_start();
    $_SESSION['mensaje'] = "Las contraseñas no son iguales";
    $_SESSION['icono'] = 'error';
    header('Location: '.$URL.'/admin/usuarios/create.php');
}
?>
