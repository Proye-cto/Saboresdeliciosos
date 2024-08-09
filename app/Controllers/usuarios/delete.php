<?php

include ('../../../app/config.php');

$id_usuario = $_POST['id_usuario'];


$sentencia = $pdo->prepare("DELETE FROM usuarios WHERE id_usuario = '$id_usuario' ");

if($sentencia->execute()){
  if ($sentencia->rowCount() > 0) {
    // Se eliminó al menos una fila
    session_start();
    $_SESSION['mensaje'] = "Se eliminó el usuario de la base de datos";
    $_SESSION['icono'] = 'success';
    header('Location: '.$URL.'/admin/usuarios');
  } else {
    // No se eliminó ninguna fila (posiblemente el usuario no existe)
    session_start();
    $_SESSION['mensaje'] = "Error: No se pudo encontrar el usuario para eliminar";
    $_SESSION['icono'] = 'error';
    header('Location: '.$URL.'/admin/usuarios');
  }
} else {
  // Error en la ejecución de la consulta
  session_start();
  $_SESSION['mensaje'] = "Error: No se pudo eliminar el usuario de la base de datos";
  $_SESSION['icono'] = 'error';
  header('Location: '.$URL.'/admin/usuarios');
}
