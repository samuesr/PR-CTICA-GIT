<?php 
include_once 'MODELS/bocetos_model.php';
include_once 'MODELS/boceto.php';

class paginas_controller{
    private $paginas_model;
    public $vista;
    public function iniciar()
    {
        $this->vista="home_view.php";
    }
    public function services(){
$this->vista="services_view.php";
    }
    public function about_us(){
$this->vista="about_us_view.php";
    }
    public function contact_us(){
$this->vista="pages/contact_us.php";
    }
    public function users(){
$this->vista="users_view.php";
    }
}

?>