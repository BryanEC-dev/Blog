<?php

// iniciar sesión y la conexion a la bd
require_once('includes/conexion.php');
session_start();

$email =  '';
$password = '';
$error = '';

//recoger los datos del formulario

if($_POST){
    if(!isset($_POST['email']) && !isset($_POST['password'])){
       errors();
    }

    $email = empty($_POST['email']) ? errors() : $_POST['email'];
    $password = empty($_POST['password']) ? errors() : $_POST['password'];

// consultar el usuario
$sql = "SELECT nombre, apellidos, email, password FROM usuarios WHERE email= '$email'";

$consulta = mysqli_query($db,$sql);

if($consulta == true){
    $datos = mysqli_fetch_assoc($consulta);
    // verificar contraseña
    $verification = password_verify($password,$datos['password']);
    if (!$verification){
        errors();
    };

    $_SESSION['usuario'] = $datos['nombre'].' '.$datos['apellidos'];
}else{
    errors();
}

   echo "exito";

}

function errors(){
    global $error;
    $error = 'El correo o contraseña no son validos';

    header('location:index.php?error='.$error);
}