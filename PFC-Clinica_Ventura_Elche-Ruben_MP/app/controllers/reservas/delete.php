<?php
//PFC - Rubén Méndez Pérez - 2024


$id_reserva = $_GET['id_reserva'];

//REALIZAMOS LA CONSULTA

$sentencia = $pdo->prepare("DELETE FROM tb_reservas WHERE id_reserva='$id_reserva'");
if ($sentencia->execute()) {
    // session_start();
    $_SESSION['mensaje'] = "Se eliminó correctamente.";
    $_SESSION['icono'] = 'success';
    var_dump($URL);
    header('Location:' . $URL . '/admin/reservas');
} else {
    // session_start();
    $_SESSION['mensaje'] = "Error no se pudo eliminar correctamente";
    $_SESSION['icono'] = 'error';
    header('Location:'. $URL . '/admin/reservas');
}
