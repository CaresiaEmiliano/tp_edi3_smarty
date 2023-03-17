<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Login</title>
    <style>
        <?php
            if(isset($_REQUEST["errors"]) && $_REQUEST["errors"]==true){
        ?>
                .errors{display:block;}
        <?php }else{ ?>
                .errors{display:none;}
        <?php }?>
    </style>
</head>
<body id="body_login">
    <form id="form_login" action="Sesion/inicio.php" method="post">
        <h1>Inicio de sesión</h1>
        
        <!-- Email input -->
        <div class="form-outline mb-4">
        <input type="usuario" id="form2Example1" class="form-control" name="usuario" required/>
        <label class="form-label" for="form2Example1">Usuario</label>
        </div>
        <!-- Password input -->
        <div class="form-outline mb-4">
        <input type="password" id="form2Example2" class="form-control" name="contrasenia" required/>
        <label class="form-label" for="form2Example2">Contraseña</label>
        </div>
        <!-- Submit button
                <button type="submit" class="btn btn-block w-100" id="boton_signin">Ingresar</button>    
    -->
        <button class="btn btn-outline-primary w-100" type="submit" id="boton_signin" >Ingresar</button>
        <span class="errors text-center" style="color:red">Error al iniciar sesión<br/>Verifique Usuario y Contraseña</span>
    </form>
</body>
</html>