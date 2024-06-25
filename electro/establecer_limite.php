<?php
// Establecer encabezados
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

// Leer los datos JSON del cuerpo de la solicitud
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['consumo_limite'])) {
    $nuevoConsumoLimite = intval($data['consumo_limite']); // Asegurarse de que es un entero

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "electroJordy";

    // Crear la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die(json_encode(['success' => false, 'message' => 'Conexión fallida: ' . $conn->connect_error]));
    }

    // Intentar insertar el valor de consumo_limite en la tabla consumo
    $sql = "INSERT INTO consumo (consumo_limite) VALUES (?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        echo json_encode(['success' => false, 'message' => 'Prepare failed: ' . $conn->error]);
        exit();
    }

    $stmt->bind_param("i", $nuevoConsumoLimite);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al insertar el límite de consumo: ' . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Datos incompletos.']);
}
?>
