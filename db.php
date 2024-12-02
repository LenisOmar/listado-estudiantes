<?php
// db.php
$host = "localhost";       // Servidor de la base de datos
$dbname = "control_asistencias"; // Nombre de la base de datos
$username = "root";        // Usuario de la base de datos
$password = "";            // Contraseña de la base de datos

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
