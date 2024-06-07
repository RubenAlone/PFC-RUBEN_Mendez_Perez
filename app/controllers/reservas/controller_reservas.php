<?php
include('../../config.php');

if (isset($_GET['id_terapeuta'])) {
    $id_terapeuta = $_GET['id_terapeuta'];
} else {
    // Handle the case where id_terapeuta is not set in the GET request
    // You can set a default value or return an error
    $id_terapeuta = null;
}



$id_usuario = isset($_POST['id_usuario']) ? $_POST['id_usuario'] : null;
$terapeuta_id = isset($_POST['terapeuta_id']) ? $_POST['terapeuta_id'] : null;
$tipo_servicio = isset($_POST['tipo_servicio']) ? $_POST['tipo_servicio'] : null;
$f_reserva = isset($_POST['f_reserva']) ? $_POST['f_reserva'] : null;
$h_reserva = isset($_POST['h_reserva']) ? $_POST['h_reserva'] : null;
$title = $tipo_servicio;
$start = $f_reserva;
$end = $f_reserva;
$color = "#5F9EA0";

// Set default values for other variables if necessary
$fechaHora = date('Y-m-d H:i:s');
$estado_registro = 'pending'; // Or any other default value

// Check if all necessary values are set before attempting to insert
if ($id_usuario && $terapeuta_id && $tipo_servicio && $f_reserva && $h_reserva) {
    $sentencia = $pdo->prepare('INSERT INTO tb_reservas
    (id_usuario, terapeuta_id, tipo_servicio, f_reserva, h_reserva, fyh_creacion, estado, color, title, start, end)
    VALUES (:id_usuario, :terapeuta_id, :tipo_servicio, :f_reserva, :h_reserva, :fyh_creacion, :estado, :color, :title, :start, :end)');

    $sentencia->bindParam(':id_usuario', $id_usuario);
    $sentencia->bindParam(':terapeuta_id', $terapeuta_id);
    $sentencia->bindParam(':tipo_servicio', $tipo_servicio);
    $sentencia->bindParam(':f_reserva', $f_reserva);
    $sentencia->bindParam(':h_reserva', $h_reserva);
    $sentencia->bindParam(':fyh_creacion', $fechaHora);
    $sentencia->bindParam(':estado', $estado_registro);
    $sentencia->bindParam(':color', $color);
    $sentencia->bindParam(':title', $title);
    $sentencia->bindParam(':start', $start);
    $sentencia->bindParam(':end', $end);

    if ($sentencia->execute()) {
        session_start();
        $_SESSION['mensaje'] = "Se creó la cita correctamente.";
        $_SESSION['icono'] = 'success';
        header('Location: ' . $URL . '/terapeutas.php');
    } else {
        session_start();
        $_SESSION['mensaje'] = "No se pudo crear la cita, contacte con el administrador.";
        $_SESSION['icono'] = 'error';
        header('Location: ' . $URL . '/terapeutas.php');
    }
} else {
    session_start();
    $_SESSION['mensaje'] = "Faltan datos para crear la cita.";
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/terapeutas.php');
}
?>
