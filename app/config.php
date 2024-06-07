<!--
IES. Albarregas - Mérida
Proyecto de Desarrollo de Aplicaciones Web
Alumno: Rubén Méndez Pérez - 2024
-->
<?php


//DEFINIMOS EL NOMBRE DE NUESTRO PROYECTO


    define('APP_NAME','PFC | Clínica Ventura Elche');
    
    //CONEXIÓN BBDD
    define('SERVIDOR','localhost');
    define('USUARIO','root');
    define('PASSWORD','');
    define('BD','clinica_ventura_2024');
    
    
    // define('SERVIDOR','adminbbdd.dondominio.com');
    // define('USUARIO','ddb227369');
    // define('PASSWORD','Rmp_2024*');
    // define('BD','ddb227369');


$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

//PERMITIR EJECUTAR LA APLICACIÓN AUNQUE HAYA UN ERROR
try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
   // echo "conexión exitosa";
} catch (PDOException $e) {
    echo "NO SE pudo conectar";
}

//CREAMOS LA VARIABLE PARA NUESTROS PROYECTO
$URL=   "http://localhost/PFC-Clinica_Ventura_Elche";
// $URL=   "https://www.clinicaventuraelche.com/proyecto";

// VARIABLES FECHA Y HORA
// https://www.php.net/manual/en/timezones.php
date_default_timezone_set("Europe/Madrid"); // Europe/Madrid

$fechaHora = date(format:'Y-m-d H:i:s');
$fecha_actual = date(format:'Y-m-d');
$dia_actual = date(format:'d');
$mes_actual = date(format:'m');
$year_actual = date(format:'Y');
$hora_actual = date(format:'H:i:s');
$estado_registro = '1';


?>