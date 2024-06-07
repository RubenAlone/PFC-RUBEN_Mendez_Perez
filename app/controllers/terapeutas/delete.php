<?php
//PFC - Rubén Méndez Pérez - 2024

include('../../../app/config.php');

$id_terapeuta = $_POST['id_terapeuta'];

//REALIZAMOS LA CONSULTA

$sentencia = $pdo->prepare("DELETE FROM tb_terapeutas WHERE id_terapeuta = '$id_terapeuta'");
if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se eliminó correctamente.";
    $_SESSION['icono'] = 'success';
    header('Location: ' . $URL . '/admin/terapeutas');
} else {
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo eliminar correctamente";
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/admin/terapeutas');
}
