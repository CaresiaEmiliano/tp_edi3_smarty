<?php
include_once("../Controlador/Controler.php");

abstract class Router{

    public function __construct(){}

    public static function request($in_request){
        if($in_request["origen"]=="sucursal"){
            $controlador = new Controlador_Sucursal();
            $controlador->obtener_tabla();
        }
        if($in_request["origen"]=="stock"){
            $controlador = new Controlador_Stock();
            $controlador->obtener_tabla();
        }
        if($in_request["origen"]=="productos"){
            $controlador = new Controlador_Productos();
            $controlador->obtener_tabla();
        }
    }
}

Router::request($_GET);
?>