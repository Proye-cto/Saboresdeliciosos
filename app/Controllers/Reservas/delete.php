<?php
include('../../../app/config.php');

session_start();

// Verificar que se haya enviado un ID de reserva válido
if (isset($_POST['id_reserva']) && !empty($_POST['id_reserva']) && is_numeric($_POST['id_reserva'])) {
    $id_reserva = $_POST['id_reserva'];

    try {
        // Iniciar transacción
        $pdo->beginTransaction();

        // Eliminar la reserva
        $sentencia = $pdo->prepare('DELETE FROM reservas WHERE id_reserva = :id_reserva');
        $sentencia->bindParam(':id_reserva', $id_reserva, PDO::PARAM_INT);
        $sentencia->execute();

        // Verifica si se eliminó la reserva
        if ($sentencia->rowCount() > 0) {
            $pdo->commit();
            $_SESSION['mensaje'] = "Cancelación exitosa";
            $_SESSION['icono'] = 'success';
        } else {
            $pdo->rollBack();
            $_SESSION['mensaje'] = "Error: No se pudo eliminar la reserva de la base de datos";
            $_SESSION['icono'] = 'error';
        }
    } catch (Exception $e) {
        // En caso de error, deshacer la transacción
        $pdo->rollBack();
        $_SESSION['mensaje'] = "Error: " . $e->getMessage();
        $_SESSION['icono'] = 'error';
        error_log($e->getMessage()); // Registrar el error en el archivo de log
    }

    // Redirigir al usuario
    header('Location: ' . $URL . '/reservasus.php');
    exit();
} else {
    $_SESSION['mensaje'] = "Error: ID de reserva inválido";
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/reservasus.php');
    exit();
}
?>
