<?php
// en MVC vista y modelo no interatuan entre ellos, para ello existe el controlador, que es el cerebro.
//separ interface de incursiones a bases de datos.
//El motr que da empuje a todo es el index
require_once('MODELS/notas_model.php');
class notas_controller
{
    //para manejar el modelo+
    private $n_model;
    //manejar las vistas
    public $titulo_vista;
    public $vista;

    function __construct()
    {
        $this->n_model = new notas_model();
        $this->titulo_vista = 'Menu CRUD';
        $this->vista = 'menu_view.php';
    }
    public function iniciar()
    {
        $this->titulo_vista = 'Menu CRUD';
        $this->vista = 'menu_view.php';
    }
    public function obtener_todos()
    {
        $this->titulo_vista = 'Listado de notas';
        $this->vista = 'listar_view.php';
        $lista = $this->n_model->get();
        return $lista;
    }
    public function estadisticar()
    {
        $this->titulo_vista = 'Estadisticas de notas';
        $this->vista = 'listarE_view.php';
        $listaE = $this->n_model->analizar();
        return $listaE;
    }
    public function solicitar_todos()
    {
        $this->titulo_vista = 'Carga Ids';
        $this->vista = 'cargar_desplegable_view.php';
        $lista = $this->n_model->get();
        return $lista;
    }
    public function mostrarNotaBorrar($id)
    {
        $this->titulo_vista = "Datos Nota ";
        $this->vista = "borrar_nota_view.php";
        $notaBorrada = $this->n_model->getById($id);
        return $notaBorrada;
    }
    public function borrarNota($id)
    {
        $this->vista = "menu_view.php";
        $resultado = $this->n_model->delete($id);
        return $resultado;
    }
    public function mostrarNotaActualizar($id)
    {
        $this->vista = "actualizar_view.php";
        $this->titulo_vista = "Actualizar nota";
        $nota = $this->n_model->getById($id);
        return $nota;
    }
    public function actulalizacion($nota)
    {
        $this->vista = "menu_view.php";
        $resultado = $this->n_model->update($nota);
        return $resultado;
    }
    public function insertar()
    {
        $this->vista = "insertar_view.php";
        $this->titulo_vista = "Insertar nota";
    }
    public function insertarNota($nota)
    {
        $this->vista = "menu_view.php";
        $this->titulo_vista = "Nota Insertada";
        $nnota = $this->n_model->insert2($nota);
        return $nnota;
    }
    public function borrarVarios()
    {
        $this->vista = "borrar_varios_view.php";
        $this->titulo_vista = "Borrar varias notas";
        $lista = $this->n_model->get();
        return $lista;
    }
    public function eliminarVarios($lista)
    {
        foreach ($lista as $key => $value) {
            $this->n_model->delete($value);
        }
        $this->vista = "menu_view.php";
    }
}
