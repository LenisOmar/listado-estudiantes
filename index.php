<!-- index.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Control de Asistencias</title>
</head>
<body>
    <h2>Registrar Asistencia</h2>
    <form action="guardar_asistencia.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Registrar Asistencia</button>
    </form>
</body>
</html>
