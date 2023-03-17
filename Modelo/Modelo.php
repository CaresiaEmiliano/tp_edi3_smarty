<?php
include_once("../Clases/conexion.php");

abstract class Modelo{

    protected $conexion;
    protected $tabla;

    public function traer_tabla(){
        $query = "SELECT * FROM stockaR.".$this->tabla;
        $con = $this->conexion->get_conection();
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }

}

class Modelo_Sucursal extends Modelo{

    public function __construct(){
        $this->conexion = new Conexion();
        $this->tabla = "v_sucursales";
    }
}

class Modelo_Stock extends Modelo{

    public function __construct(){
        $this->conexion = new Conexion();
        $this->tabla = "mostrar_stock_actual";
    }
}

class Modelo_Producto extends Modelo{

    public function __construct(){
        $this->conexion = new Conexion();
        $this->tabla = "v_productos";
    }
}
?>