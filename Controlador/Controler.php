<?php
//include_once("C:\Users\Emiliano\Documents\Instituto\EDI_III\Smarty\Modelo\Modelo.php");
include_once("C:/xampp/htdocs/tp_edi3_smarty/Modelo/Modelo.php");
//include_once("C:\Users\Emiliano\Documents\Instituto\EDI_III\Smarty\Vista\Vista.php");
include_once("C:/xampp/htdocs/tp_edi3_smarty/Vista/Vista.php");
class Controlador{

    private $vista;
    private $modelo;

    public function __construct(){
        $this->vista = new Vista();
        $this->modelo = new Modelos();
    }

    public function request($in_request){
        $resultado = $this->modelo->traer_generos();
        $this->vista->enviar_tabla($resultado);
    }
}

$Controller = new Controlador();
$Controller->request($_GET);
?>