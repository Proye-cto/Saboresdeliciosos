<?php
include ('../../config.php');

// recibe variables del metodo POST
$email = $_POST['email'];
$password = $_POST['password'];

$pdo->query('USE sd');

$sql = "SELECT * FROM usuarios WHERE correo = :email AND contrasena = :password";
$query = $pdo->prepare($sql);
$query->bindParam(':email', $email);
$query->bindParam(':password', $password);
$query->execute();
$usuario = $query->fetch(PDO::FETCH_ASSOC);

if ($usuario) {
    session_start();
    $_SESSION['user_id'] = $usuario['id_usuario'];
    $_SESSION['sesion_email'] = $usuario['correo'];
    $_SESSION['cargo'] = $usuario['cargo'];

    if ($usuario['cargo'] == "ADMINISTRADOR") {
        header('Location: ' . $URL . '/admin/usuarios/login.php');
    } else {
        header('Location: ' . $URL . '/');
    }
} else {
    session_start();
    $_SESSION['mensaje'] = "Verifique los campos ";
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/login');
}
?>

