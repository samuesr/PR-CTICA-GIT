<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>

<body>
    <h1>Listar Notas</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Contenido</th>
        </tr>
        <?php
        //conoce el array asoc $datosAVista['datos'];
        if ($datosAVista['datos'] > 0) {
            foreach ($datosAVista['datos'] as $key => $value) {
        ?>
                <tr>
                    <td><?php echo $value->getid(); ?></td>
                    <td><?php echo $value->gettitulo(); ?></td>
                    <td><?php echo $value->getcontenido(); ?></td>
                </tr><?php
                    }
                } else {
                    echo '<tr><td colspan="3">No existen notas a mostrar</td></tr>';
                }
                        ?>
    </table>
</body>

</html>