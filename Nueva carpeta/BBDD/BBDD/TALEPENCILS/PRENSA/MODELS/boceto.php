<?php 
class Boceto {
 private $marca;
 private $descripcion;
 private $fabricado;
 private $email;

 public function __construct($marca, $descripcion, $fabricado, $email)
 {
    $this->marca=$marca;
    $this->descripcion=$descripcion;
    $this->fabricado=$fabricado;
    $this->email=$email;
 }
 function getMarca() {
    return $this->marca;
 }
 function setMarca($marca) {
    $this->$marca = $marca;
    return $this;
 }
function getDescripcion() {
    return $this->descripcion;
}
function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
    return $this;
}
function getFabricado() {
    return $this->fabricado;
}
function setFabricado($fabricado) {
    $this->fabricado = $fabricado;
    return $this;
}
function getEmail() {
    return $this->email;
}
function setEmail($email) {
    $this->email = $email;
    return $this;
}
}
?>