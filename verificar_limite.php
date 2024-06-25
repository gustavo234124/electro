<?php
header('Content-Type: application/json');
include 'conexion.php'; // Asegúrate de incluir el archivo de conexión a tu base de datos

$query = "SELECT consumo_limite FROM consumo LIMIT 1";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode(['success' => true, 'consumo_limite' => $row['consumo_limite']]);
} else {
    echo json_encode(['success' => true, 'consumo_limite' => null]);
}

$conn->close();
?>
