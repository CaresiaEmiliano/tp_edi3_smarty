<?php
include_once("../Modelo/Modelo.php");
//include_once("C:/xampp/htdocs/tp_edi3_smarty/Modelo/Modelo.php");
include_once("../Vista/Vista.php");
//include_once("C:/xampp/htdocs/tp_edi3_smarty/Vista/Vista.php");
abstract class Controlador{

    protected $vista;
    protected $modelo;

    public function obtener_tabla(){
            $resultado = $this->modelo->traer_tabla();
            $this->vista->enviar_tabla($resultado);
    }
}

class Controlador_Sucursal extends Controlador{
    public function __construct(){
        $this->vista = new Vista_Sucursal();
        $this->modelo = new Modelo_Sucursal();
    }
}

class Controlador_Stock extends Controlador{
    public function __construct(){
        $this->vista = new Vista_Stock();
        $this->modelo = new Modelo_Stock();
    }
}

class Controlador_Productos extends Controlador{
    public function __construct(){
        $this->vista = new Vista_Producto();
        $this->modelo = new Modelo_Producto();
    }
}
?>