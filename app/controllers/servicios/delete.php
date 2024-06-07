<?php
//PFC - Rubén Méndez Pérez - 2024

include('../../../app/config.php');

$id_servicio = $_POST['id_servicio'];

//REALIZAMOS LA CONSULTA

$sentencia = $pdo->prepare("DELETE FROM tb_servicios WHERE id_servicio = '$id_servicio'");
if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se eliminó correctamente.";
    $_SESSION['icono'] = 'success';
    header('Location: ' . $URL . '/admin/servicios');
} else {
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo eliminar correctamente";
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/admin/servicios');
}
