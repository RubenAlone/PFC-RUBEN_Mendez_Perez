<?php
//PFC - Rubén Méndez Pérez - 2023

include('../../../app/config.php');

$id_usuario = $_POST['id_usuario'];

//REALIZAMOS LA CONSULTA

$sentencia = $pdo->prepare("DELETE FROM tb_usuarios WHERE id_usuario = '$id_usuario'");
if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se eliminó correctamente.";
    $_SESSION['icono'] = 'success';
    header('Location: ' . $URL . '/admin/usuarios');
} else {
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo eliminar correctamente";
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/admin/usuarios');
}
