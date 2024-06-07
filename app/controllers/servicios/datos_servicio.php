<?php
//PFC - Rubén Méndez Pérez - 2024

//CONTROLADOR QUE NOS PERMITE OBTENER EL LISTADO DE SERVICIOS

$sql = "SELECT * FROM tb_servicios WHERE id_servicio = '$id_servicio'";
$query = $pdo->prepare($sql);
$query->execute();
$servicios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($servicios as $servicio){
    $nombre_servicio = $servicio['nombre_servicio'];
    $duracion = $servicio['duracion'];
    $precio = $servicio['precio'];
}

?>