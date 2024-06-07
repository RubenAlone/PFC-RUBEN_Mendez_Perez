<?php
//PFC - Rubén Méndez Pérez - 2024

include('../../../app/config.php');

//RECUPERAMOS EL ID DEL servicio
$id_servicio = $_POST['id_servicio'];

//ALMACENAMOS DATOS
$nombre_servicio = $_POST['nombre_servicio'];
$duracion = $_POST['duracion'];
$precio = $_POST['precio'];


    //PREPARAMOS LA SENTENCIA DE ACTUALIZACIÓN

    $sentencia = $pdo->prepare("UPDATE tb_servicios
    SET nombre_servicio=:nombre_servicio, 
    duracion=:duracion,
    precio=:precio, 
    fyh_actualizacion=:fyh_actualizacion
    WHERE id_servicio=:id_servicio");
    $sentencia->bindParam('nombre_servicio', $nombre_servicio);
    $sentencia->bindParam('duracion', $duracion);
    $sentencia->bindParam('precio', $precio);
    $sentencia->bindParam('fyh_actualizacion', $fechaHora);
    $sentencia->bindParam('id_servicio', $id_servicio);

    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Se actualizaron los datos correctamente.";
        $_SESSION['icono'] = 'success';
        header('Location: ' . $URL . '/admin/servicios/');
    } else {
        session_start();
        $_SESSION['mensaje'] = "No se pudo actualizar.";
        $_SESSION['icono'] = 'error';
        header('Location: ' . $URL . '/admin/servicios/update.php?id_servicio=' . $id_servicio);
    }


?>