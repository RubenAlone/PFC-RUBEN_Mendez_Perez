<?php
//PFC - Rubén Méndez Pérez - 2024

include('../../../app/config.php');

//ALMACENAMOS DATOS
$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_verify = $_POST['password_verify'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];


//COMPROBAMOS QUE NO ESTÉN LOS EMAILS REPETIDOS
$contador = 0;
$sql = "SELECT * FROM tb_terapeutas WHERE email = '$email'";
$query = $pdo->prepare($sql);
$query->execute();
$terapeutas = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($terapeutas as $terapeuta) {
    $contador = $contador + 1;
}
if ($contador > 0) {
    //echo "Este terapeuta ya está registrado en la base de datos.";
    session_start();
    $_SESSION['mensaje'] = "Este email " . $email . " ya está registrado.";
    $_SESSION['icono'] = "error";

    header('Location: ' . $URL . '/admin/terapeutas/create.php');
} else {
    echo "Este terapeuta es nuevo.";
    //VERIFICAMOS CONTRASEÑAS
    if ($password == $password_verify) {
        //echo "Si son iguales";

        //ENCRIPTAMOS LA CONTRASEÑA
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sentencia = $pdo->prepare("INSERT INTO tb_terapeutas
        (nombre_completo, email, password, fyh_creacion, direccion, telefono)
        VALUES(:nombre_completo, :email, :password, :fyh_creacion, :direccion, :telefono)");
        $sentencia->bindParam('nombre_completo', $nombre_completo);
        $sentencia->bindParam('email', $email);
        $sentencia->bindParam('password', $password);
        $sentencia->bindParam('fyh_creacion', $fechaHora);
        $sentencia->bindParam('direccion', $direccion);
        $sentencia->bindParam('telefono', $telefono);

        if($sentencia->execute()) {
            session_start();
            $_SESSION['mensaje'] = "Se registró correctamente.";
            $_SESSION['icono'] = 'success';
            header('Location: ' . $URL . '/admin/terapeutas');
        } else {
            session_start();
            $_SESSION['mensaje'] = "Error no se pudo resgistrar correctamente";
            $_SESSION['icono'] = 'error';
            header('Location: ' . $URL . '/admin/terapeutas/create.php');
        }
    } else {
        session_start();
        $_SESSION['mensaje'] = "Error, las contraseñas no coinciden.";
        $_SESSION['icono'] = 'error';
        header('Location: ' . $URL . '/admin/terapeutas/create.php');
    }
}
