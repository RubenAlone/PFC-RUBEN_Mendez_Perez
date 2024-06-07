<?php
//PFC - Rubén Méndez Pérez - 2024

//CONTROLADOR QUE NOS PERMITE OBTENER EL LISTADO DE USUARIOS

$sql = "SELECT * FROM tb_usuarios WHERE id_usuario = '$id_usuario'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios as $usuario){
    $nombre_completo = $usuario['nombre_completo'];
    $email = $usuario['email'];
    $cargo = $usuario['cargo'];
    $direccion = $usuario['direccion'];
    $telefono = $usuario['telefono'];
    $fyh_creacion = $usuario['fyh_creacion'];
    $fyh_actualizacion = $usuario['fyh_actualizacion'];
}

?>