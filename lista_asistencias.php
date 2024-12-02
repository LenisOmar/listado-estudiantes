<!-- lista_asistencias.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Asistencias</title>
</head>
<body>
    <h2>Lista de Asistencias</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha</th>
        </tr>
        <?php
        include 'db.php';
        $sql = "SELECT * FROM asistencias";
        $stmt = $conn->query($sql);
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['fecha'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
