<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Borrada</title>
</head>
<body>
    <p>Datos de la nota borrada:</p>
    <form action="index.php?controlador=notas_controller&metodo=eliminar" method="POST"> 
        <?php 
         foreach ($datosAVista['datos'] as $key => $value) {?>
        <label for="<?php echo $key;?>"> <?php echo $key;?>: 
            <input type="text" name="<?php echo $key;?>" value="<?php echo $value;?>" readonly>
        </label>
        <br>
    <?php }?>
    <input type="submit" name="eliminar" value="eliminar">
    </form>
   
</body>
</html>