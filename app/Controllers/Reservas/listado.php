<?php

$sql = "SELECT *, usu.nombre as nombre , usu.correo as correo  FROM reservas as res INNER JOIN usuarios as usu ON usu.id_usuario = res.id_usuario  ";
$query = $pdo->prepare($sql);
$query->execute();
$reservas = $query->fetchAll(PDO::FETCH_ASSOC);
