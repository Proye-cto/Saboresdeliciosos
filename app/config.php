<?php
define('APP_NAME', 'Sabores');
define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'sd');

$servidor = "mysql:dbname=" . BD . ";host=" . SERVIDOR;

try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD, 
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
    //echo "Conexion exitosa a la BD";
} catch (PDOException $e) {
    //print_r($e);
    echo "Error: no se pudo conectar a la BD";
}

$URL = "https://proye-cto.github.io/Saboresdeliciosos/ ";

date_default_timezone_set("America/Mexico_City");
$fechaHora = date('Y-m-d H:i:s');
?>
