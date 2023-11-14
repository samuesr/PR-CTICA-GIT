<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="VIEWS/styles/style.css" type="text/css" rel="stylesheet">
</head>

<body>
<header>
        <h1>LOGOTIPO</h1>
    </header>
    <nav>
        <form action="" method="GET"></form> 
        <div><a href="index.php?controlador=paginas_controller&metodo=home"><p>Home</p></a></div>
        <div><a href="index.php?controlador=paginas_controller&metodo=about_us"><p>About Us</p></a></div>
        <div><a href="index.php?controlador=paginas_controller&metodo=services"><p>Services</p></a></div>
        <div class="selected"><a href="index.php?controlador=paginas_controller&metodo=contact_us"><p>Contact Us</p></a></div>
        <div><a href="index.php?controlador=paginas_controller&metodo=users"><p>Users</p></a></div>
    </nav>
    <h2>Contacto</h2>
    <form action="" method="GET"></form>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Imagen</td>
            <td>Operación</td>
        </tr>

        <?php
        foreach ($datosDeVista['datos'] as $key => $value) {
        ?><tr>
                <td><?php echo $value['nombre']; ?></td>
                <td><img width="100px" src="FOTOGRAF/<?php
                if ($value['nombre']) {
                    echo $value['nombre'];
                } else {
                    echo 'sinimagen';
                } ; ?>.jpg"></td>
                <td><a href='VIEWS/fotoretrato.php?im=<?php echo $value['nombre'] ?>.jpg'>ver imagen</a></td>
            </tr>
        <?php }
        ?>
    </table>
</body>

</html>