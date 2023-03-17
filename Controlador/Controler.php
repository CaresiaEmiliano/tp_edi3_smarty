<?php
include_once("../Modelo/Modelo.php");
//include_once("C:/xampp/htdocs/tp_edi3_smarty/Modelo/Modelo.php");
include_once("../Vista/Vista.php");
//include_once("C:/xampp/htdocs/tp_edi3_smarty/Vista/Vista.php");
class Controlador{

    private $vista;
    private $modelo;

    public function __construct(){
        $this->vista = new Vista();
        $this->modelo = new Modelo();
    }

    public function request($in_request){
        if($in_request["origen"] == "sucursal"){
            $resultado = $this->modelo->traer_generos();
            $this->vista->enviar_tabla($resultado);
        }
    }
}

$Controller = new Controlador();
$Controller->request($_GET);
?>