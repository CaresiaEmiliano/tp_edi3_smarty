<?php
include_once("conexion.php");

class Modelos{

    private $conexion;

    public function __construct(){
        $this->conexion = new Conexion();
    }

    public function traer_generos(){
        $query = "SELECT * FROM stockaR.v_sucursales vs";
        $con = $this->conexion->get_conection();
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }

}
?>