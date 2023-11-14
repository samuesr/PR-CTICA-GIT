<?php
include_once 'CONTROLLERS/paginas_controller.php';
include_once 'CONTROLLERS/bocetos_controller.php';
$controller_p=new paginas_controller(); //Lo s controles se podrían instnciar nada más entrar en su case específico.
$controller_b= new boceto_Controller();

if (isset($_GET['metodo'])) {
    $metodo=$_GET['metodo'];
    $controlador=$_GET['controlador'];
switch ($controlador) {
    case 'paginas_controller':
        switch ($metodo) {
            case 'services':
                $controller_p->services();
                require_once 'VIEWS/'.$controller_p->vista;
                break;
            case 'contact_us':
                $controller_p->contact_us();
               $datosDeVista['datos']['vendedores']=$controller_b->obtener_vendedores();
               $datosDeVista['datos']['fotos']=scandir('PRENSA/FOTOGRAF');
               require_once 'VIEWS/'.$controller_p->vista;
                break;
            case 'home':
                $controller_p->iniciar();
                require_once 'VIEWS/' . $controller_p->vista;
                break;
                case 'users':
                $controller_p->users();
                require_once 'VIEWS/' . $controller_p->vista;
                    break;
                    case 'about_us':
                        $controller_p->about_us();
                        require_once 'VIEWS/' . $controller_p->vista;
                        break;
            default:
    
                break;
        }
        break;
    case 'bocetos_controller':
        switch ($metodo) {
            case 'insertar':
                if(isset($_POST['enviar'])){
                     if (isset($_POST['fabricado'])) {
                        $fabricado=1;
                    } else {
                        $fabricado=0;
                    }
                    $controller_b->insertar($_POST['marca'], $_POST['descripcion'], $fabricado, $_POST['email']);
                    $controller_p->iniciar();
                    require_once 'VIEWS/' . $controller_p->vista;
                }
                break;
            
            default:
                # code...
                break;
        }
        break;
    default:
        # code...
        break;
}
 
} else {
        $controller_p->iniciar();
        require_once 'VIEWS/' . $controller_p->vista;
  
            } 
           /* <!-- if (isset($_GET['im'])) {
                echo "pase por aqui";
                $datosDeVista['datos']=$_GET['im'];
                $datosAVista=$controller->aIm($datosDeVista['datos']);
                require_once 'VIEWS/' . $controller->vista;
            } else { -->



                if (isset($_POST['enviar'])) {
                    
                }
    */
