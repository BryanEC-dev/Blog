<?php

$host = 'localhost';
$user = 'root';
$password ='root';
$database = 'blog';

// realizando conexión a la base de datos 
$db = mysqli_connect($host,$user,$password,$database);

// verificando la conexión
if (!$db) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}



?>