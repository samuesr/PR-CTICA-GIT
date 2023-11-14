<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>SELECCIONA LAS NOTAS A BORRAR:</h1>
    <form action="index.php?controlador=notas_controller&metodo=borrar_varios" method="POST">
        <?php foreach ($datosAVista['datos'] as $key => $value) { ?>
            <label><input type="checkbox" value="<?php echo $value->getid(); ?>" name="id<?php echo $value->getid(); ?>"><?php echo $value->getid(); ?></label><br>
        <?php }
        ?>
        <input type="submit" name="borrar" value="Eliminar selección">
    </form>
</body>

</html>