<?php
//PFC - Rubén Méndez Pérez - 2024

include('../../../app/config.php');

// ALMACENAMOS DATOS
$nombre_servicio = $_POST['nombre_servicio'];
$duracion = $_POST['duracion'];
$precio = $_POST['precio'];

// Verificar si el servicio ya existe
$consulta = $pdo->prepare("SELECT COUNT(*) FROM tb_servicios WHERE nombre_servicio = :nombre_servicio");
$consulta->bindParam('nombre_servicio', $nombre_servicio);
$consulta->execute();
$servicio_existe = $consulta->fetchColumn();

if ($servicio_existe > 0) {
    session_start();
    $_SESSION['mensaje'] = "El servicio ya existe.";
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/admin/servicios/create.php');
} else {
    $sentencia = $pdo->prepare("INSERT INTO tb_servicios (nombre_servicio, duracion, precio) VALUES(:nombre_servicio, :duracion, :precio)");
    $sentencia->bindParam('nombre_servicio', $nombre_servicio);
    $sentencia->bindParam('duracion', $duracion);
    $sentencia->bindParam('precio', $precio);

    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Se registró correctamente.";
        $_SESSION['icono'] = 'success';
        header('Location: ' . $URL . '/admin/servicios');
    } else {
        session_start();
        $_SESSION['mensaje'] = "Error, no se pudo registrar correctamente.";
        $_SESSION['icono'] = 'error';
        header('Location: ' . $URL . '/admin/servicios/create.php');
    }
}
?>
