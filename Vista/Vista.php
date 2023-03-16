<?php
//include_once("C:\Users\Emiliano\Documents\Instituto\EDI_III\Smarty\libs\Smarty.class.php");
include_once("C:/xampp/htdocs/tp_edi3_smarty/libs/Smarty.class.php");
class Vista{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function enviar_tabla($in_resultado){
        $this->smarty->assign('titulo',"Sucursales");
        $this->smarty->assign("resultado",$in_resultado);
        //$this->smarty->display("C:\Users\Emiliano\Documents\Instituto\EDI_III\Smarty\\templates\sucursales.tpl");
        $this->smarty->display("C:/xampp/htdocs/tp_edi3_smarty/templates/sucursales.tpl");
    }
}
?>