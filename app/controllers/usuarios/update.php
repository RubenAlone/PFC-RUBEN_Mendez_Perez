<?php
//PFC - Rubén Méndez Pérez - 2023

include('../../../app/config.php');

//RECUPERAMOS EL ID DEL USUARIO
$id_usuario = $_POST['id_usuario'];

//ALMACENAMOS DATOS
$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['email'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$password = $_POST['password'];
$cargo = $_POST['cargo'];

$password_verify = $_POST['password_verify'];

//COMPROBAMOS SI LA CONTRASEÑA ESTÁ VACÍA
if ($password == "") {
    $sentencia = $pdo->prepare("UPDATE tb_usuarios
SET nombre_completo=:nombre_completo, 
    email=:email, 
    direccion=:direccion,
    telefono=:telefono,
    cargo=:cargo,
    fyh_actualizacion=:fyh_actualizacion
    WHERE id_usuario=:id_usuario");
    $sentencia->bindParam('nombre_completo', $nombre_completo);
    $sentencia->bindParam('email', $email);
    $sentencia->bindParam('direccion', $direccion);
    $sentencia->bindParam('telefono', $telefono);
    $sentencia->bindParam('fyh_actualizacion', $fechaHora);
    $sentencia->bindParam('id_usuario', $id_usuario);
    $sentencia->bindParam('cargo', $cargo);


    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Se actualizaron los datos correctamente.";
        $_SESSION['icono'] = 'success';
        header('Location: ' . $URL . '/admin/usuarios/');
    } else {
        session_start();
        $_SESSION['mensaje'] = "No se pudo actualizar.";
        $_SESSION['icono'] = 'error';
        header('Location: ' . $URL . '/admin/usuarios/update.php?id_usuario=' . $id_usuario);
    }
}
//VERIFICAMOS CONTRASEÑAS
if ($password == $password_verify) {
    //echo "Si son iguales";
    //ENCRIPTAMOS LA CONTRASEÑA
    $password = password_hash($password, PASSWORD_DEFAULT);

    //PREPARAMOS LA SENTENCIA DE ACTUALIZACIÓN
    $sentencia = $pdo->prepare("UPDATE tb_usuarios
SET nombre_completo=:nombre_completo, 
    password=:password,
    cargo=:cargo, 
    fyh_actualizacion=:fyh_actualizacion
    WHERE id_usuario=:id_usuario");
    $sentencia->bindParam('nombre_completo', $nombre_completo);
    $sentencia->bindParam('password', $password);
    $sentencia->bindParam('cargo', $cargo);
    $sentencia->bindParam('fyh_actualizacion', $fechaHora);
    $sentencia->bindParam('id_usuario', $id_usuario);

    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Se actualizaron los datos correctamente.";
        $_SESSION['icono'] = 'success';
        header('Location: ' . $URL . '/admin/usuarios/');
    } else {
        session_start();
        $_SESSION['mensaje'] = "No se pudo actualizar.";
        $_SESSION['icono'] = 'error';
        header('Location: ' . $URL . '/admin/usuarios/update.php?id_usuario=' . $id_usuario);
    }
} else {
    session_start();
    $_SESSION['mensaje'] = "Error, las contraseñas no coinciden.";
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/admin/usuarios/update.php?id_usuario=' . $id_usuario);
}
