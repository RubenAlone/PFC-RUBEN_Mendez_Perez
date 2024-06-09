<?php
//PFC - Rubén Méndez Pérez - 2024

//CONTROLADOR QUE NOS PERMITE OBTENER EL LISTADO DE TERAPEUTAS

$sql = "SELECT * FROM tb_terapeutas";
$query = $pdo->prepare($sql);
$query->execute();
$terapeutas = $query->fetchAll(PDO::FETCH_ASSOC);
//var_dump($terapeutas);
?>
