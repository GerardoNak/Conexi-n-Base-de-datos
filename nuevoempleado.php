<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Empleado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="stars"></div>
    <form action="agregar.php" method="post">
        <label for="empleado_nombre">Nombre:</label>
        <input type="text" name="empleado_nombre" id="empleado_nombre" required>
        <br>
        <label for="empleado_edad">Edad:</label>
        <input type="number" name="empleado_edad" id="empleado_edad" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <script src="script.js"></script>
</body>
</html>
