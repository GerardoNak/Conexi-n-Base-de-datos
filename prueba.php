<?php
include("./basedatos.php");
$conexion = conectar_db();
if($conexion->connect_error){
    die('Error; No se pudo conectar a nuestra base de datos'. $conexion->connect_error);
}
echo "Conexión exitosa";
$conexion->close();
