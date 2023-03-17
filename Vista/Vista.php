<?php
include_once("../libs/Smarty.class.php");
abstract class Vista{

    protected $smarty;
    protected $template;
    protected $titulo;

    public function enviar_tabla($in_resultado){
        $this->smarty->assign('titulo',$this->titulo);
        $this->smarty->assign("resultado",$in_resultado);
        $this->smarty->display($this->template);
    }
}

class Vista_Sucursal extends Vista{

    public function __construct(){
        $this->smarty = new Smarty();
        $this->template = "../templates/sucursales.tpl";
        $this->titulo = "Sucursales";
    }
}

class Vista_Stock extends Vista{

    public function __construct(){
        $this->smarty = new Smarty();
        $this->template = "../templates/stock.tpl";
        $this->titulo = "Stock";
    }
}

class Vista_Producto extends Vista{

    public function __construct(){
        $this->smarty = new Smarty();
        $this->template = "../templates/productos.tpl";
        $this->titulo = "Productos";
    }
}
?>