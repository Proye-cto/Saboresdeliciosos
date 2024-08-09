<?php

include ('../../../app/config.php');

$nombre = $_POST['nombre'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena_verify = $_POST['contrasena_verify'];
$cargo = "CLIENTE";

$fechaHora = date('Y-m-d H:i:s'); // Inicializa la variable con la fecha y hora actual

$contador = 0;
$sql = "SELECT * FROM usuarios WHERE correo = '$correo' ";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

if ($usuarios) {
    // Se encontró al menos un usuario con el mismo correo electrónico
    //echo "Este usuario ya esta registrado en la base de datos";
    session_start();
    $_SESSION['mensaje'] = "El correo ".$correo." ya esta registrado en la base de datos";
    $_SESSION['icono'] = 'error';
   header('Location: '.$URL.'/registro.php');
} else {
    // El correo electrónico no está registrado, procede a registrar el nuevo usuario
    if ($contrasena == $contrasena_verify) {
        // Las contraseñas coinciden

        $sentencia = $pdo->prepare("INSERT INTO usuarios
                                      (nombre, apellido_paterno, apellido_materno, correo, contrasena, cargo, fecha_creacion)
                                      VALUES(:nombre, :apellido_paterno, :apellido_materno, :correo, :contrasena, :cargo, :fecha_creacion)");
        $sentencia->bindParam('nombre', $nombre);
        $sentencia->bindParam('apellido_paterno', $apellido_paterno);
        $sentencia->bindParam('apellido_materno', $apellido_materno);
        $sentencia->bindParam('correo', $correo);
        $sentencia->bindParam('contrasena', $contrasena); // Contraseña sin encriptar
        $sentencia->bindParam('cargo', $cargo);
        $sentencia->bindParam('fecha_creacion', $fechaHora);

        if ($sentencia->execute()) {
            // La inserción en la base de datos fue exitosa
            session_start();
            $_SESSION['mensaje'] = "Se registró de la manera correcta en la base de datos";
            $_SESSION['icono'] = 'success';
            $_SESSION['texto'] = 'Éxito';

            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];

            $pdo->query('USE sd');

            $sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'";

            $query = $pdo->prepare($sql);
            $query->execute();
            $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
             $contador=0;
            foreach ( $usuarios as $usuario) {
                // se sumara al contador si es que existe una respuesta
              $contador= $contador+1;
            }

            //si la variable contador es mayor a 0

            if ($contador>0)
            {
                echo "Bienvenido al sistema ";
                session_start();
                $_SESSION['sesion_email']=$correo;
                header('Location: ' . $URL . '/');

            }
            else{
                echo "Error en los datos  ";
                header('Location: ' . $URL . '/');
            }


        } else {
            session_start();
            $_SESSION['mensaje'] = "Error: no se pudo registrar en la base de datos";
            $_SESSION['icono'] = 'error';
            header('Location: '.$URL.'/registro');
        }

    } else {
        // Las contraseñas no coinciden
        echo "Las contraseñas no son iguales";
        session_start();
        $_SESSION['mensaje'] = "Las contraseñas no son iguales";
        $_SESSION['icono'] = 'error';
        header('Location: '.$URL.'/registro.php');
    }
}
?>
