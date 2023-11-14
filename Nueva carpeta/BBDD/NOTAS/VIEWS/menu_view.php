<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal - CRUD</title>
</head>

<body>
    <h1>Menú de acciones</h1>
    <form action="" method="GET"></form>
    <ul>
        <li><a href="index.php?controlador=notas_controller&metodo=listar">Listar notas</a></li>
        <li><a href="index.php?controlador=notas_controller&metodo=analizar">Listar estadísticas</a></li>
        <li><a href="index.php?controlador=notas_controller&metodo=delete">Borrar nota</a></li>
        <li><a href="index.php?controlador=notas_controller&metodo=actualizar">Actualizar nota</a></li>
        <li><a href="index.php?controlador=notas_controller&metodo=crear">Insertar nota</a></li>
        <li><a href="index.php?controlador=notas_controller&metodo=borrar_varios">Eliminar varias notas</a></li>
    </ul>
</body>

</html>