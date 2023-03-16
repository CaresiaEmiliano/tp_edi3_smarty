<?php
class Conexion{
    protected $con;
    private $usuario;
    private $password;
    private $host;
    private $db;

    public function __construct(){
        try{
            $this->usuario = "root";
            $this->password = "virtualidad";
            $this->host = "192.168.0.54:5050";
            $this->db = "stockaR";
            $this->con = new PDO("mysql:host=$this->host;dbname=$this->db",$this->usuario,$this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Error en conexion: ".$e->getMessage();
        }
    }
            
    public function get_conection(){ return $this->con;}

    public function close_conection(){$this->con = null;}
}
?>