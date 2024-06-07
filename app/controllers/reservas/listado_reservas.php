<?php
// PFC - Rubén Méndez Pérez - 2024

// CONTROLADOR QUE NOS PERMITE OBTENER EL LISTADO DE CITAS O UNA CITA ESPECÍFICA

if (isset($_GET['id_reserva'])) {
    $id_reserva = $_GET['id_reserva'];

    $sql = "SELECT 
        tb_reservas.id_reserva,
        tb_usuarios.nombre_completo AS nombre_cliente,
        tb_usuarios.email,
        tb_terapeutas.nombre_completo AS nombre_terapeuta,
        tb_servicios.nombre_servicio,
        tb_reservas.f_reserva,
        tb_reservas.h_reserva,
        tb_servicios.precio,
        tb_reservas.estado
    FROM 
        tb_reservas
    INNER JOIN 
        tb_usuarios ON tb_reservas.id_usuario = tb_usuarios.id_usuario
    INNER JOIN 
        tb_terapeutas ON tb_reservas.terapeuta_id = tb_terapeutas.id_terapeuta
    INNER JOIN 
        tb_servicios ON tb_reservas.tipo_servicio = tb_servicios.id_servicio
    WHERE 
        tb_reservas.id_reserva = :id_reserva";

    $query = $pdo->prepare($sql);
    $query->bindParam(':id_reserva', $id_reserva, PDO::PARAM_INT);
    $query->execute();
    $reserva = $query->fetch(PDO::FETCH_ASSOC);
} else {
    $sql = "SELECT 
        tb_reservas.id_reserva,
        tb_usuarios.nombre_completo AS nombre_cliente,
        tb_terapeutas.nombre_completo AS nombre_terapeuta,
        tb_servicios.nombre_servicio,
        tb_reservas.f_reserva,
        tb_reservas.h_reserva,
        tb_servicios.precio,
        tb_reservas.estado
    FROM 
        tb_reservas
    INNER JOIN 
        tb_usuarios ON tb_reservas.id_usuario = tb_usuarios.id_usuario
    INNER JOIN 
        tb_terapeutas ON tb_reservas.terapeuta_id = tb_terapeutas.id_terapeuta
    INNER JOIN 
        tb_servicios ON tb_reservas.tipo_servicio = tb_servicios.id_servicio";

    $query = $pdo->prepare($sql);
    $query->execute();
    $reservas = $query->fetchAll(PDO::FETCH_ASSOC);
}
