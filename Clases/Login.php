<?php
class Login{

    private $usuario;
    private $contrasenia;

    public function __construct($in_usuario,$in_contrasenia){
        $this->usuario = $in_usuario;
        $this->contrasenia = $this->encriptar($in_contrasenia);
    }

    public function get_usuario(){
        return $this->usuario;
    }

    public function validar_usuario($in_conexion){
        $pass_base = $this->obtener_credenciales($in_conexion);
        if($pass_base == $this->contrasenia){
            return true;
        }
        else{
            return false;
        }
    }

    private function obtener_credenciales($in_conexion){
        $stmt = $in_conexion->prepare("SELECT * FROM stockar.usuarios where usuario like '".$this->usuario."'");
        $stmt ->execute();
        $credenciales = $stmt->fetchAll();
        return $credenciales[0]["contrasenia"];
    }

    private function encriptar($in_contrasenia){
        return hash("sha256",$in_contrasenia);
    }
}

?>

