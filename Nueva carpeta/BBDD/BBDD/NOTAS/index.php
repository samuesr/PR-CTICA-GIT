<!--//este es el director del VC, da juego a toda la aplicación.-->
<?php include_once('controllers/notas_controller.php');
$controller = new notas_controller();
if (isset($_GET['metodo'])) {
    $metodo = $_GET['metodo'];
    switch ($metodo) {
        case 'listar':
            echo "opción de listar";
            $datosAVista['datos'] = $controller->obtener_todos();
            //cargar la vista
            require_once 'views/' . $controller->vista;
            break;
        case 'analizar': {
                echo 'opcion de analizar';
                $datosAVista['datos'] = $controller->estadisticar();
                require_once 'views/' . $controller->vista;
                break;
            }
        case 'delete': {
                if (isset($_POST['enviar'])) {
                    //Se puede hacer al reves añadiendo signo de negcion al isset "!";
                    echo "Nota a borrar";
                    //Aquí $_POST está llemmp y se recibe por formulario.
                    $datosDeVista['datos'] = $_POST['id'];
                    $datosAVista['datos'] = $controller->mostrarNotaBorrar($datosDeVista['datos']);
                    require_once 'views/' . $controller->vista;
                    break;
                } else {
                    $donde = "delete";
                    $datosAVista['datos'] = $controller->solicitar_todos();
                    require_once 'views/' . $controller->vista;
                    break;
                }
            }
        case 'eliminar': {

                $datosAVista['datos'] = $controller->borrarNota($_POST['id']);
                require_once 'views/' . $controller->vista;
                break;
            }
        case 'actualizar': {
                if (isset($_POST['modificar'])) {
                    $nota = new Nota($_POST['id'], $_POST['titulo'], $_POST['contenido']);
                    $datosAVista['datos'] = $controller->actulalizacion($nota);
                    require_once 'views/' . $controller->vista;
                    break;
                } else {
                    if (isset($_POST['enviar'])) {
                        $datosDeVista['datos'] = $_POST['id'];
                        $datosAVista['datos'] = $controller->mostrarNotaActualizar($datosDeVista['datos']);
                        require_once 'views/' . $controller->vista;
                        break;
                    } else {
                        $donde = "actualizar";
                        $datosAVista['datos'] = $controller->solicitar_todos();
                        require_once 'views/' . $controller->vista;
                        break;
                    }
                }
            }
        case 'crear': {
                if (isset($_POST['crear'])) {
                    $datosDeVista['datos'] = $nota = new Nota($_POST['id'], $_POST['titulo'], $_POST['contenido']);
                    $datosAVista['datos'] = $controller->insertarNota($datosDeVista['datos']);
                    require_once 'views/' . $controller->vista;
                    break;
                } else {
                    $datosAVista['datos'] = $controller->insertar();
                    require_once 'views/' . $controller->vista;
                    break;
                }
            }
        case 'borrar_varios':
            if (isset($_POST['borrar'])) {
                $datosDeVista['datos'] = $_POST;
                array_pop($datosDeVista['datos']);
                $datosAVista['datos'] = $controller->eliminarVarios($datosDeVista['datos']);
                require_once 'views/' . $controller->vista;
                break;
            } else {
                $datosAVista['datos'] = $controller->borrarVarios();
                require_once 'views/' . $controller->vista;
                break;
            }
            break;

        default:
            # code...
            break;
    }
} else {
    $controller->iniciar();
    require_once 'views/' . $controller->vista;
}



?>