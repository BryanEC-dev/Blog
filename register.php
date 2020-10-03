<?php

$name = '';
$lastName = '';
$email = '';
$password = '';
$errors = array();


// verificar si todos los pararemtros estan siendo enviados por la url
if(!isset($_POST['nombre']) || !isset($_POST['apellidos']) || !isset($_POST['email']) || !isset($_POST['password'])) {
    echo "faltan parametros";
}

// verificar que los parametros no se encuentren vacios y cumplan las reglas de validación

$name = empty($_POST['nombre']) ? error('El campo nombre no puede estar en blanco') : $_POST['nombre'];
$lastName = empty($_POST['apellidos']) ? error('El campo apellidos no puede estar en blanco') : $_POST['apellidos'];
$email = empty($_POST['email']) ? error('El campo correo electronico no puede estar en blanco') : $_POST['email'];
$password = empty($_POST['password']) ? error('El campo password no puede estar en blanco') : $_POST['password'];

validateErrors();

// validar la información de los campos ingresados.
if(preg_match('/[0-9]/',$name))
    error('El campo nombre solo puede contenecer letras');

if(preg_match('/[0-9]/',$lastName))
    error('El campo apellidos solo puede contenecer letras');

if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    error('La dirección de correo electronico no es valida');

validateErrors();

// Guardar usuario







// -------------------- FUNCIONES ---------------------------


// agregar los errores al array errors
function error($error){
    global $errors;
    array_push($errors,$error);
}

// en caso de existir errores [$errors] mostrara por pantalla la lista de los errores presentados
function validateErrors() {
    global $errors;
    if(!empty($errors)){
        // serializar el array para poder pasarlo por la url
        $error = serialize($errors);
        $error = urlencode($error);
        // enviar los errores al index
        header("location:index.php?errores=".$error);
    }
}




