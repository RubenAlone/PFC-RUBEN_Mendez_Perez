<!--
  IES. Albarregas - Mérida
  Proyecto de Desarrollo de Aplicaciones Web
  Alumno: Rubén Méndez Pérez - 2024
-->
<?php

include('../../config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM tb_usuarios WHERE email = '$email'";

//PREPARAMOS LA CONSULTA CON PDO
$query = $pdo->prepare($sql);
//EJECUTAMOS
$query->execute();
//PASAMOS LA CONSULTA A UN ARRAY
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);


$contador = 0;
foreach ($usuarios as $usuario) {
    $contador = $contador + 1;
    $password_tabla = $usuario['password'];
}

// $hash = $password_tabla;
if ($contador > 0) {
    //echo "Bienvenido al sistema";
    session_start();
    $_SESSION['sesion_email'] = $email;
    $_SESSION['mensaje'] = "Le damos la bienvenida";
    $_SESSION['icono'] = 'success';
    header('Location: ' . $URL . '/admin');
} else {
    //echo "Usuario o contraseña incorrectos";
    session_start();
    $_SESSION['mensaje'] = "Usuario o contraseña incorrectos";
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/');
}
