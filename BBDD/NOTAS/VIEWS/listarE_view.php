<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadisticas view</title>
</head>
<body>
   <?php 

   if (count($datosAVista['datos'])>0) {
    foreach ($datosAVista['datos'] as $key => $value) {
    echo "<p>Metodo: $key = $value</p>";
   }
   } else {
   echo "<p>Sin datos que mostar. Tabla vacía</p>";
   }
   
   ?>
</body>
</html>