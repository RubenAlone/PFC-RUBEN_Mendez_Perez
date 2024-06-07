<!--
  IES. Albarregas - Mérida
  Proyecto de Desarrollo de Aplicaciones Web
  Alumno: Rubén Méndez Pérez - 2024
-->
<?php

//CONTROLADOR QUE NOS PERMITE OBTENER EL LISTADO DE USUARIOS

$sql = "SELECT * FROM tb_usuarios";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

?>