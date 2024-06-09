<?php
//PFC - Rubén Méndez Pérez - 2024

//CONTROLADOR QUE NOS PERMITE OBTENER EL LISTADO DE servicioS

$sql = "SELECT * FROM tb_servicios";
$query = $pdo->prepare($sql);
$query->execute();
$servicios = $query->fetchAll(PDO::FETCH_ASSOC);

?>