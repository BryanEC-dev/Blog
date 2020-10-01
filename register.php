<?php

$name;
$lastName;
$email;
$password;

var_dump($_POST);

if(!isset($_POST['nombre']) || !isset($_POST['apellidos']) || !isset($_POST['email']) || !isset($_POST['password'])) {
    echo "faltan parametros";
}


?>