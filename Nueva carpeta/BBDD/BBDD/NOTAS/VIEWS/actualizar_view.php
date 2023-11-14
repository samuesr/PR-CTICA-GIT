<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Nota</title>
</head>

<body>
    <h1>Actualización de nota</h1>
    <form action="index.php?controlador=notas_controller&metodo=actualizar" method="POST">

        <label for="id">IDENTIFICADOR: <input type="text" name="id" value="<?php echo $datosAVista['datos']['id']; ?>" readonly></label>
        <label for="titulo">TITULO: <input type="text" name="titulo" value="<?php echo $datosAVista['datos']['titulo']; ?>"></label>
        <label for="contenido">CONTENIDO: <input type="text" name="contenido" value="<?php echo $datosAVista['datos']['contenido']; ?>"></label>
        <input type="submit" name="modificar" value="Modificar">

    </form>
</body>

</html>