<!--
  IES. Albarregas - Mérida
  Proyecto de Desarrollo de Aplicaciones Web
  Alumno: Rubén Méndez Pérez - 2024
-->
<?php
include('../../../app/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se proporcionó un ID de servicio válido
    if (isset($_POST['servicio_id']) && !empty($_POST['servicio_id'])) {
        // Obtener el ID del servicio desde la solicitud
        $servicioId = $_POST['servicio_id'];

        // Consultar la base de datos para obtener la duración y el precio del servicio
        $query = "SELECT duracion, precio FROM servicios WHERE id_servicio = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$servicioId]);
        $servicio = $stmt->fetch(PDO::FETCH_ASSOC);

        // Devolver los datos del servicio como respuesta JSON
        echo json_encode($servicio);
    } else {
        // Enviar una respuesta de error si no se proporcionó un ID de servicio válido
        http_response_code(400);
        echo json_encode(['error' => 'No se proporcionó un ID de servicio válido']);
    }
} else {
    // Enviar una respuesta de error si la solicitud no es de tipo POST
    http_response_code(405);
    echo json_encode(['error' => 'Método de solicitud no permitido']);
}
?>