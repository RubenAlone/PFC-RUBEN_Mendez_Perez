<!--
  IES. Albarregas - Mérida
  Proyecto de Desarrollo de Aplicaciones Web
  Alumno: Rubén Méndez Pérez - 2024
-->
<?php
include('../../config.php');

$fecha = $_GET['fecha'];
// var_dump($_GET);
$hora_cita = "";
$id_terapeuta=$_GET['id_terapeuta'];

// Preparamos la consulta SQL con el nombre correcto de la columna 'terapeuta_id'
$query = $pdo->prepare("SELECT * FROM tb_reservas WHERE terapeuta_id=:id_terapeuta  AND f_reserva = :fecha");
$query->bindParam(':fecha', $fecha, PDO::PARAM_STR);
$query->bindParam(':id_terapeuta', $id_terapeuta, PDO::PARAM_STR);
$query->execute();

$datos = $query->fetchAll(PDO::FETCH_ASSOC);
// var_dump($datos);

$horario = ['09:00 - 10:00', '10:00 - 12:00', '12:00 - 14:00', '15:00 - 17:00', '17:00 - 19:00', '19:00 - 21:00'];
foreach ($datos as $dato) {
    $hora_cita = $dato['h_reserva'];
    for ($i = 0; $i < 6; $i++) {
        if ($horario[$i] == $hora_cita) {
            $num = $i + 1;
            $hora_res = "#btn_h" . $num;
            echo "<script>
                document.querySelector('$hora_res').disabled = true;
                document.querySelector('$hora_res').style.backgroundColor = 'red';
            </script>";
        }
    }
}
?>
