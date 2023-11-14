<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos de la nota a insertar</h1>
    <form action="index.php?controlador=notas_controller&metodo=crear" method="POST">
        <label for ="id">IDENTIFICADOR:<input type="number" min=0 id="id" name="id"></label>
        <label for ="titulo">TITULO:<input type="text" id="titulo" name="titulo"></label>
        <label for ="contenido">CONTENIDO:<input type="text" id="contenido" name="contenido"></label>
        <input type="submit" name="crear" value="Crear Nota">
    </form>
</body>
</html>