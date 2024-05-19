<?php
include("./basedatos.php");
$nombre = $_REQUEST['empleado_nombre'];
$edad = $_REQUEST['empleado_edad'];
if(!empty($nombre)&& !empty($edad)){
    $conexion = conectar_db();
    $consulta = "INSERT INTO empleados (nombre, edad) VALUES ('$nombre', '$edad')";
    $resultado = $conexion->query($consulta);
    if($resultado){
        header('Location: listaempleado.php');
    }else{
        header('Location: nuevoempleado.php');
    }
}else{
    header('Location: nuevoempleado.php');
}
    