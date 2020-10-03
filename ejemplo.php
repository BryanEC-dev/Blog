<?php

$host = 'localhost';
$usuario  = 'root';
$password= 'root';
$database ='blog';

// conectandose a mysql
$conexion = mysqli_connect($host,$usuario,$password,$database);

if(mysqli_connect_errno()){
    echo "la conexión a fallado".mysqli_connect_error();
}else {
    print('conexión realizada con éxito');
}

mysqli_query($conexion,"SET NAMES 'utf8'");

// insertar en la base de datos

$insert = mysqli_query($conexion,"insert into notas values(null,'nota desde php','esto es una nota desde php','rojo')");

if($insert){
    echo "La inserción tuvo un error: ".mysqli_error($conexion);
}

// realizando consulta de datos
$consulta = mysqli_query($conexion,"select * from notas");



// obteniendo la información de la consulta

while ($nota = mysqli_fetch_assoc($consulta)) {
   echo "<h1>".$nota['titulo']."</h1>";
}


?>