<?php

// Obtener el id_reserva desde la solicitud GET
$id_reserva = $_GET['id_reserva'];

// Preparar y ejecutar la consulta para obtener la reserva específica y el nombre completo del usuario
$sql = "SELECT reservas.*, 
               CONCAT(usuarios.nombre, ' ', usuarios.apellido_paterno, ' ', usuarios.apellido_materno) AS nombre_usuario 
        FROM reservas 
        JOIN usuarios ON reservas.id_usuario = usuarios.id_usuario 
        WHERE reservas.id_reserva = :id_reserva";
$query = $pdo->prepare($sql);
$query->bindParam(':id_reserva', $id_reserva, PDO::PARAM_INT);
$query->execute();
$reserva = $query->fetch(PDO::FETCH_ASSOC);

// Asignar los valores a las variables
if ($reserva) {
    $nombre_usuario = $reserva['nombre_usuario'];
    $mensaje = $reserva['mensaje'];
    $fecha_cita = $reserva['fecha_cita'];
    $hora_cita = $reserva['hora_cita'];
    // Otros campos si es necesario
} else {
    echo "Reserva no encontrada.";
}
?>

