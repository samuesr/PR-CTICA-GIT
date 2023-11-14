<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar nota</title>
</head>

<body>
    <h1>SELECCIONA UNA NOTA:</h1>
    <form action="index.php?controlador=notas_controller&metodo=<?php echo $donde;?>" method="POST">
        <p></p>
        <label for="id"> Elige una nota:<select name="id">
                <?php
                foreach ($datosAVista['datos'] as $key => $value) {
                    echo "<option>{$value->getid()}</option>";
                } ?>
            </select></label>
        <br><input type="submit" name="enviar" value="Enviar Id">
    </form>
</body>

</html>