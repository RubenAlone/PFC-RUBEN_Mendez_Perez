<?php
//PFC - Rubén Méndez Pérez - 2023

echo $password = "12345678";
//Encripta contraseña
echo md5($password)."<br>";
echo sha1($password)."<br>";

//El mejor para encriptar
echo password_hash($password, PASSWORD_DEFAULT);

// Ver el ejemplo de password_hash() para ver de dónde viene este hash.
$hash = '$2y$10$hPKMBX8C9X3.606veMur5.10tXEdVry17RCDZgXI3UKsfR88hJ7M6';

if (password_verify('$password', $hash)) {
    echo 'La contraseña es válida!';
} else {
    echo 'La contraseña no es válida.';
}

date_default_timezone_set("Europe/Madrid");
$fecha = date('d-m-Y H:i:s');

echo $fecha;
?>