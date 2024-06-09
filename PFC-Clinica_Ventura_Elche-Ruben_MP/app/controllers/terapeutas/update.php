<?php
//PFC - Rubén Méndez Pérez - 2024

include('../../../app/config.php');

//RECUPERAMOS EL ID DEL USUARIO
$id_terapeuta = $_POST['id_terapeuta'];

//ALMACENAMOS DATOS
$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_verify = $_POST['password_verify'];
$direccion = $_POST['direccion'];

//COMPROBAMOS SI LA CONTRASEÑA ESTÁ VACÍA
if ($password == "") {
    $sentencia = $pdo->prepare("UPDATE tb_terapeutas
SET nombre_completo=:nombre_completo, 
    direccion=:direccion, 
    fyh_actualizacion=:fyh_actualizacion
    WHERE id_terapeuta=:id_terapeuta");
    $sentencia->bindParam('nombre_completo', $nombre_completo);
    $sentencia->bindParam('direccion', $direccion);
    $sentencia->bindParam('fyh_actualizacion', $fechaHora);
    $sentencia->bindParam('id_terapeuta', $id_terapeuta);

    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Se actualizaron los datos correctamente.";
        $_SESSION['icono'] = 'success';
        header('Location: ' . $URL . '/admin/terapeutas/');
    } else {
        session_start();
        $_SESSION['mensaje'] = "No se pudo actualizar.";
        $_SESSION['icono'] = 'error';
        header('Location: ' . $URL . '/admin/terapeutas/update.php?id_terapeuta=' . $id_terapeuta);
    }
}
//VERIFICAMOS CONTRASEÑAS
if ($password == $password_verify) {
    //echo "Si son iguales";
    //ENCRIPTAMOS LA CONTRASEÑA
    $password = password_hash($password, PASSWORD_DEFAULT);

    //PREPARAMOS LA SENTENCIA DE ACTUALIZACIÓN
    $sentencia = $pdo->prepare("UPDATE tb_terapeutas
SET nombre_completo=:nombre_completo, 
    password=:password,
    direccion=:direccion, 
    fyh_actualizacion=:fyh_actualizacion
    WHERE id_terapeuta=:id_terapeuta");
    $sentencia->bindParam('nombre_completo', $nombre_completo);
    $sentencia->bindParam('password', $password);
    $sentencia->bindParam('direccion', $direccion);
    $sentencia->bindParam('fyh_actualizacion', $fechaHora);
    $sentencia->bindParam('id_terapeuta', $id_terapeuta);

    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Se actualizaron los datos correctamente.";
        $_SESSION['icono'] = 'success';
        header('Location: ' . $URL . '/admin/terapeutas/');
    } else {
        session_start();
        $_SESSION['mensaje'] = "No se pudo actualizar.";
        $_SESSION['icono'] = 'error';
        header('Location: ' . $URL . '/admin/terapeutas/update.php?id_terapeuta=' . $id_terapeuta);
    }
} else {
    session_start();
    $_SESSION['mensaje'] = "Error, las contraseñas no coinciden.";
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/admin/terapeutas/update.php?id_terapeuta=' . $id_terapeuta);
}
