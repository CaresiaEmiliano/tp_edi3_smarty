<?php
include_once("../Clases/conexion.php");

class Modelo{

    private $conexion;
    private $tabla;

    public function __construct($in_tabla){
        $this->conexion = new Conexion();
        $this->tabla = $in_tabla;
    }

    public function traer_generos(){
        $query = "SELECT * FROM stockaR.".$this->tabla;
        $con = $this->conexion->get_conection();
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }

}
?>