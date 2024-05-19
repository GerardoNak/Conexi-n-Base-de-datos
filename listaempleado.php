<?php
include("./basedatos.php");

$conexion = conectar_db();
$consulta = "SELECT * FROM empleados";
$resultado = $conexion->query($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="stars"></div>
    <h1>Lista de Empleados</h1>
    <ul>
        <?php
        if ($resultado->num_rows > 0) {
            while($fila = $resultado->fetch_assoc()) {
                echo "<li>" . $fila['nombre'] . " - " . $fila['edad'] . " años</li>";
            }
        } else {
            echo "<li>No hay empleados</li>";
        }
        $conexion->close();
        ?>
    </ul>
    <script src="script.js"></script>
</body>
</html>
