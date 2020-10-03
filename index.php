<?php
require_once('includes/cabecera.php');
require_once('includes/helpers.php');



?>

<div id="contenedor">
    <?php
    if(isset($_GET['mensaje']) && $_GET['mensaje'] == 1){
      echo alert("Usuario creado con exito");
    }elseif (isset($_GET['mesanje']) && $_GET['mensaje'] == 0){
        echo showErrors('Hubo un error al crear el usuario, intente mas tarde.');
    } ?>
    <!-- Barra lateral -->
    <?php require_once('includes/lateral.php'); ?>
    <!-- /Barra lateral -->

    <!-- caja principal -->
    <div id="principal">
        <h2> Titulo de mi entrada</h2>
        <p>
            descripción de la entrada
        </p>
    </div>
    <!-- /caja principal -->
</div>

<?php
require_once('includes/pie.php');
?>