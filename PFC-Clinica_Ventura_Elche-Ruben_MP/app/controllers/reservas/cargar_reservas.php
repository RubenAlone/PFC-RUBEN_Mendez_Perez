<?php
// include ('../app/config.php');

// Definir el ID del terapeuta
$id_terapeuta=$_GET['id_terapeuta'];
// Consulta SQL para obtener las reservas del terapeuta específico
$sql = "SELECT title, start, end, color AS title, r.start, r.end, r.color 
        FROM tb_reservas r
        JOIN tb_servicios s ON r.tipo_servicio = s.id_servicio
        JOIN tb_terapeutas t ON r.terapeuta_id = t.id_terapeuta
        WHERE t.id_terapeuta = r.terapeuta_id AND terapeuta_id=:terapeuta_id
        LIMIT 0, 25";

// Preparamos la consulta
$query = $pdo->prepare($sql);

// Vinculamos el parámetro :terapeuta_id
$query->bindParam(':terapeuta_id', $terapeuta_id, PDO::PARAM_INT);

// Ejecutamos la consulta
$query->execute();

// Obtenemos los resultados
$resultado = $query->fetchAll(PDO::FETCH_ASSOC);
var_dump($resultado);

// Convertimos el resultado en una cadena JSON
echo json_encode($resultado);
?>
