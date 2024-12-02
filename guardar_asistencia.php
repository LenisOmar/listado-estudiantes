<?php
// guardar_asistencia.php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $fecha = date("Y-m-d");

    $sql = "INSERT INTO asistencias (nombre, fecha) VALUES (:nombre, :fecha)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':fecha', $fecha);

    if ($stmt->execute()) {
        echo "Asistencia registrada exitosamente.";
    } else {
        echo "Error al registrar la asistencia.";
    }
}
?>
