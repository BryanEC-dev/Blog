<?php

//TODO
// escapar datos
// crear log con errores

require_once('includes/conexion.php');

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

// encrytar contraseña
$segure_password = encryptPassword($password);

// insertar en la base

$sql = "INSERT INTO usuarios VALUES(null,'$name','$lastName','$email','$segure_password',CURRENT_DATE )";

$save = mysqli_query($db,$sql);

if($save) {
    $message = true;
    //$_SESSION['user'] = "La sesión se encuentra iniciada";
    header("location:index.php?mensaje=".$message );

}else {
    // guardar en el log los errores
    var_dump(mysqli_error($db));
    $message = false;
    header("location:index.php?mensaje=".$message );
}



// -------------------- FUNCIONES ---------------------------


// agregar los errores al array errors
function error($error){
    global $errors;
    array_push($errors,$error);
    return null;
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


function encryptPassword($password) {
   return password_hash($password,PASSWORD_BCRYPT, ['cost' => 4]);

}



