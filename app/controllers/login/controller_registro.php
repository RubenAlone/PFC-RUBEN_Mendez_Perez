<!--
  IES. Albarregas - Mérida
  Proyecto de Desarrollo de Aplicaciones Web
  Alumno: Rubén Méndez Pérez - 2024
-->
<?php
include('../../../app/config.php');

//ALMACENAMOS DATOS
$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$password = $_POST['password'];
$password_verify = $_POST['password_verify'];
// ESTADO POR DEFECTO ACTIVO
// $estado= "1";
//TIPO DE ACCESO POR DEFECTO DE LOS CLIENTES
$cargo = "CLIENTE";


//COMPROBAMOS QUE NO ESTÉN LOS EMAILS REPETIDOS
$contador = 0;
$sql = "SELECT * FROM tb_usuarios WHERE email = '$email'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario) {
    $contador = $contador + 1;
}
if ($contador > 0) {
    //echo "Este usuario ya está registrado en la base de datos.";
    session_start();
    $_SESSION['mensaje'] = "Este email " . $email . " ya está registrado.";
    $_SESSION['icono'] = "error";

    header('Location: ' . $URL . '/login/registro.php');
} else {
    echo "Este usuario es nuevo.";
    //VERIFICAMOS CONTRASEÑAS
    if ($password == $password_verify) {
        //echo "Si son iguales";

        //ENCRIPTAMOS LA CONTRASEÑA
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sentencia = $pdo->prepare("INSERT INTO tb_usuarios
        (nombre_completo, email, direccion, telefono, password, cargo,  fyh_creacion)
        VALUES(:nombre_completo, :email, :direccion, :telefono, :password, :cargo, :fyh_creacion)");
        $sentencia->bindParam('nombre_completo', $nombre_completo);
        $sentencia->bindParam('email', $email);
        $sentencia->bindParam('direccion', $direccion);
        $sentencia->bindParam('telefono', $telefono);
        $sentencia->bindParam('password', $password);
        $sentencia->bindParam('cargo', $cargo);
        $sentencia->bindParam('fyh_creacion', $fechaHora);

        if($sentencia->execute()) {
            session_start();
            $_SESSION['mensaje'] = "Se registró correctamente.";
            $_SESSION['icono'] = 'success';

            //INICIA SESIÓN SI SE REGISTRA EL CLIENTE CORRECTAMENTE
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
            foreach($usuarios as $usuario){
                $contador = $contador + 1;
                $password_tabla = $usuario['password'];
            }
            
            $hash = $password_tabla;
            if( ($contador>0) && (password_verify($password, $hash))) {
                //echo "Bienvenido al sistema";
                session_start();
                $_SESSION['sesion_email'] = $email;
                $_SESSION['mensaje'] = "Le damos la bienvenida";
                $_SESSION['icono'] = 'success';
                header('Location: '.$URL.'/admin');
            }else{
                //echo "Usuario o contraseña incorrectos";
                session_start();
                $_SESSION['mensaje'] = "Usuario o contraseña incorrectos";
                $_SESSION['icono'] = 'error';
                header('Location: '.$URL.'/');    
            }

        } else {
            session_start();
            $_SESSION['mensaje'] = "Error no se pudo resgistrar correctamente";
            $_SESSION['icono'] = 'error';
            header('Location: ' . $URL . '/login/registro.php');
        }
    } else {
        session_start();
        $_SESSION['mensaje'] = "Error, las contraseñas no coinciden.";
        $_SESSION['icono'] = 'error';
        header('Location: ' . $URL . '/login/registro.php');    
    }
}
