<?php
//include_once 'bd.php';
include_once 'MODELS/bocetos_model.php';
include_once 'MODELS/boceto.php';
class boceto_Controller
{
    private $b_modelo;

    public function insertar($marca, $descripcion, $fabricado, $email)
    {
        $this->b_modelo = new bocetos_model();
        $e = $this->b_modelo->insert($marca, $descripcion, $fabricado, $email);
        //echo "Devuelve: " . $e;
        return $e;
    }
    public function obtener_vendedores()
    {
        $this->b_modelo = new bocetos_model();
        $lista = $this->b_modelo->get_vendors();
        return $lista;
    }
}
