<?php

$sql = "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario' ";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios as $usuario){
    $nombre = $usuario['nombre'];
    $apellido_paterno = $usuario['apellido_paterno'];
    $apellido_materno = $usuario['apellido_materno'];
    $correo = $usuario['correo'];
    $cargo = $usuario['cargo'];
}