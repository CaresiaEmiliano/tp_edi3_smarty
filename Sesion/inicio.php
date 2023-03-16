<?php
    include_once("C:/xampp/htdocs/tp_edi3_smarty/Modelo/Modelo.php");
    include_once("C:/xampp/htdocs/tp_edi3_smarty/login.php");
    include_once("C:/xampp/htdocs/tp_edi3_smarty/Clases/Login.php");
    
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