<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Blog</title>
</head>

<body>
    <!-- Cabecera -->
    <header id="cabecera">
        <div id="logo">
            <a href="#">
                Blog de videojuegos
            </a>
        </div>
        <!-- menu -->
        <nav id="menu">
            <ul>
                <li><a>Inicio</a></li>
                <li><a>Categoria 1</a></li>
                <li><a>Categoria 2</a></li>
                <li><a>Categoria 3</a></li>
                <li><a>Categoria 4</a></li>
                <li><a>Sobre mi</a></li>
                <li><a>Contacto</a></li>

            </ul>
        </nav>
    </header>

    <div id="contenedor">
        <!-- Barra lateral -->
        <aside id="sidebar">
            <div id="login" class='bloque'>
                <h3>Identificate</h3>
                <form action="login.php" method="post">
                    <label for="email">Email</label>
                    <input name="email" type="email">

                    <label for="password">Contraeseña</label>
                    <input name="password" type="text">

                    <input value="Enviar" type="submit" class="boton">
                </form>

            </div>

            <div id="register" class='bloque'>
                <h3>Registrate</h3>
                <form action="register.php" method="post">
                    <label for="nombre">Nombres</label>
                    <input name="nombre" type="text">

                    <label for="apellidos">Apellidos</label>
                    <input name="apellidos" type="text">

                    <label for="email">Email</label>
                    <input name="email" type="email">

                    <label for="password">Contraeseña</label>
                    <input name="password" type="text">

                    <input value="Enviar" type="submit" class="boton">

                </form>

            </div>
        </aside>

        <!-- caja principal -->
        <div id="principal">
            <h2> Titulo de mi entrada</h2>
            <p>
                descripción de la entrada
            </p>
        </div>
    </div>

    <!-- pie de pagina -->
    <footer id="pie">
        <p>Desarrollado por bryan silva </p>
    </footer>

</body>

</html>