<aside id="sidebar">
    <div id="login" class='bloque'>
        <h3>Identificate</h3>
        <?php
        if(isset($_GET['error'])){
            echo showErrors($_GET['error']);
        } ?>
        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input name="email" type="text">

            <label for="password">Contraseña</label>
            <input name="password" type="password">

            <input value="Enviar" type="submit" class="boton">
        </form>

    </div>

    <div id="register" class='bloque'>
        <h3>Registrate</h3>
        <?php
        if(isset($_GET['errores'])){
            $errores = unserialize($_GET['errores']);
             foreach ( $errores as $error) {
               echo showErrors($error);
             }
        } ?>
        <form action="register.php" method="post">
            <label for="nombre">Nombres</label>
            <input name="nombre" type="text">

            <label for="apellidos">Apellidos</label>
            <input name="apellidos" type="text">

            <label for="email">Email</label>
            <input name="email" type="text">

            <label for="password">Contraeseña</label>
            <input name="password" type="password">

            <input value="Enviar" type="submit" class="boton">

        </form>

    </div>
</aside>