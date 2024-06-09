<?php
//PFC - Rubén Méndez Pérez - 2024

//CONTROLADOR QUE NOS PERMITE OBTENER EL LISTADO DE TERAPEUTAS

$sql = "SELECT * FROM tb_terapeutas WHERE id_terapeuta = '$id_terapeuta'";
$query = $pdo->prepare($sql);
$query->execute();
$terapeutas = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($terapeutas as $terapeuta){
    $nombre_completo = $terapeuta['nombre_completo'];
    $email = $terapeuta['email'];
    $telefono = $terapeuta['telefono'];
    $direccion = $terapeuta['direccion'];
}

?>