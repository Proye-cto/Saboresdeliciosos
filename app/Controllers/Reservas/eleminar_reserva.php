<?php

include ('../../../app/config.php');

$id_reserva = $_POST['id_reserva'];


$sentencia = $pdo->prepare("DELETE FROM reservas WHERE id_reserva = '$id_reserva' ");

if($sentencia->execute()){
  if ($sentencia->rowCount() > 0) {
    // Se eliminó al menos una fila
    session_start();
    $_SESSION['mensaje'] = "Se eliminó la reserva de la base de datos";
    $_SESSION['icono'] = 'success';
    header('Location: '.$URL.'/admin/reservas');
  } else {
    // No se eliminó ninguna fila (posiblemente el usuario no existe)
    session_start();
    $_SESSION['mensaje'] = "Error: No se pudo encontrar la reserva para eliminar";
    $_SESSION['icono'] = 'error';
    header('Location: '.$URL.'/admin/reservas');
  }
} else {
  // Error en la ejecución de la consulta
  session_start();
  $_SESSION['mensaje'] = "Error: No se pudo eliminar la reserva de la base de datos";
  $_SESSION['icono'] = 'error';
  header('Location: '.$URL.'/admin/reservas');
}
