<?php
function conectar_db(){
    $servidor = 'localhost';
    $usuario = 'root';
    $password = '';
    $db = 'crud';
    $conn = new mysqli($servidor,$usuario,$password,$db);
    return $conn;

}