<!--
  IES. Albarregas - Mérida
  Proyecto de Desarrollo de Aplicaciones Web
  Alumno: Rubén Méndez Pérez - 2024
-->
<?php

include('../../config.php');

session_start();

//Destruimos la sesión creada
if (isset($_SESSION['sesion_email'])) {
  session_destroy();
  header('Location: ' . $URL . '/login');
}
?>