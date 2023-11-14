<?php 
include_once 'db.php';
include_once 'boceto.php';
class bocetos_model{
    private $db_handler;

    public function __construct()
    {
     $this->db_handler= db::conectar();  
    }
    public function insert ($marca, $descripcion, $fabricado, $email){
        $parametros= array (':marca'=>$marca, ':descripcion'=>$descripcion, ':fabricado'=> $fabricado, ':email'=> $email);
        $pdo= $this->db_handler->prepare("INSERT INTO bocetos VALUES (:marca, :descripcion, :fabricado, :email)");
        try {
            $pdo->execute($parametros);
        } catch (PDOException $e) {
        }
        return $pdo->rowCount();
    }
    public function get_vendors(){
        $lista=[];
        $pdo=$this->db_handler->prepare("SELECT distinct vendedores.nombre FROM vendedores INNER JOIN ventas ON vendedores.cod_vendedor=ventas.cod_vendedor");
        $pdo->execute();
        //usar $lista=$pdo->fecthAll(PDO::FETCH_ASSOC);
        while ($row=$pdo->fetch(PDO::FETCH_ASSOC)) { 
        $lista[]=$row;} 
        return $lista;
    }
    
}
/* $notas= new bocetos_model();
echo $notas->insert("a","a",1,"2@gmail.com");*/

?>