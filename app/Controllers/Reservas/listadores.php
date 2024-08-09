<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    die("Error: Usuario no autenticado.");
}

$user_id = $_SESSION['user_id'];

try {
    // Continúa con el resto del código
    $sql = "SELECT 
                res.*, 
                usu.nombre as nombre_usuario, 
                usu.apellido_paterno as apellido_paterno_usuario,
                usu.apellido_materno as apellido_materno_usuario,
                usu.correo as correo_usuario
            FROM 
                reservas as res 
            INNER JOIN 
                usuarios as usu 
            ON 
                usu.id_usuario = res.id_usuario
            WHERE
                res.id_usuario = :user_id";

    $query = $pdo->prepare($sql);
    $query->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $query->execute();
    $reservas = $query->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
