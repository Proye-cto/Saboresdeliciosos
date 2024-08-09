<?php
include ('../../../app/config.php');

$id_usuario = $_POST['id_usuario'];
$nombre_mascota = $_POST['nombre_mascota'];
$Servicio = $_POST['Servicio'];
$fecha_cita = $_POST['fecha_cita'];
$hora_cita = $_POST['hora_cita'];
$title = '-----';
$start = $fecha_cita;
$end = $fecha_cita;
$color = "#ff7512";

$sentencia = $pdo->prepare('INSERT INTO reservas
(id_usuario,mensaje,Servicio,fecha_cita,hora_cita,title,start,end,color, fyh_creacion)
VALUES ( :id_usuario,:nombre_mascota,:Servicio,:fecha_cita,:hora_cita,:title,:start,:end,:color,:fyh_creacion)');

$sentencia->bindParam(':id_usuario',$id_usuario);
$sentencia->bindParam(':nombre_mascota',$nombre_mascota);
$sentencia->bindParam(':Servicio',$Servicio);
$sentencia->bindParam(':fecha_cita',$fecha_cita);
$sentencia->bindParam(':hora_cita',$hora_cita);
$sentencia->bindParam(':title',$title);
$sentencia->bindParam(':start',$start);
$sentencia->bindParam(':end',$end);
$sentencia->bindParam(':color',$color);
$sentencia->bindParam('fyh_creacion',$fechaHora);


if($sentencia->execute()){
  session_start();
  $_SESSION['mensaje'] = "Se registró la reserva  de la manera correcta en la base de datos";
  $_SESSION['icono'] = 'success';
  $_SESSION['texto'] = 'Éxito';
  header('Location: '.$URL.'/reservas.php');
} else {
    session_start();
    $_SESSION['mensaje'] = "Error: no se pudo registrar la reserva  en la base de datos";
    $_SESSION['icono'] = 'error';
    header('Location: '.$URL.'/reservas.php');
}
