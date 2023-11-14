<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="VIEWS/styles/style.css" type="text/css">
</head>
<body>
    <header>
        <h1>LOGOTIPO</h1>
    </header>
    <nav>
        <form action="" method="GET"></form> 
        <div><a href="index.php?controlador=paginas_controller&metodo=home"><p>Home</p></a></div>
        <div><a href="index.php?controlador=paginas_controller&metodo=about_us"><p>About Us</p></a></div>
        <div ><a href="index.php?controlador=paginas_controller&metodo=services"><p>Services</p></a></div>
        <div><a href="index.php?controlador=paginas_controller&metodo=contact_us"><p>Contact Us</p></a></div>
        <div class="selected"><a href="index.php?controlador=paginas_controller&metodo=users"><p>Users</p></a></div>
    </nav>
    <h2>Página de Usuarios</h2>
    <form action="" method="POST">
        <fieldset>
            <legend>Marca</legend>
            <input type="text" name="marca">
        </fieldset>
        <label for="descripcion">Descripción del boceto</label><textarea cols="30" rows="10" name="descripcion"></textarea>
        <fieldset>
            <legend>Lapicero fabricado</legend>
            <label for="fabricado">(No/Yes)<input type="checkbox" name="fabricado" value="1"></label>
        </fieldset>
        <label for="email" >Email de contacto:
            <input type="email" name="email">
        </label>
        <fieldset>
            <input type="submit" name='enviar' value="Insertar boceto">
        </fieldset>
    </form>
</body>
</html>