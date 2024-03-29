<?php
    include_once("../Modelo/Modelo.php");
    include_once("../login.php");
    include_once("../Clases/Login.php");
    include_once("../Clases/conexion.php");
    
    $conect = new Conexion();
    if(isset($_POST)){
        $username = $_POST["usuario"];
        $password = $_POST["contrasenia"];
        $usuario = new Login($username,$password);
        if($usuario->validar_usuario($conect->get_conection())){
            session_start();
            $_SESSION['usuario'] = $usuario;
            header('location: ../index.php');
            $conect->close_conection();
            die();
        }
        else{
            header('location: ../login.php?errors=true');
        }
    };
?>