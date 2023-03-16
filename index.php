<?php
/*
session_start();

if(!isset($_SESSION["usuario"])){
    header("location: login.php");
}else{
    require_once("Template/header.php");
    require_once("menu.php");
    require_once("Template/footer.php");
}*/
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href= "css/estilos.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="C:\xampp\htdocs\stockar\css\img\faviconS.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="http://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </script>
    <title>Stockar</title> 
  </head>
  <body>
    <?php
    session_start();
      if(!isset($_SESSION["usuario"])){
        header("location: login.php");
      }
    ?>
        <div class= "container fondo">
          <a href="Sesion/cerrar_sesion.php" id="btn-salir">Salir</a>
          <h1 class="text-center">Stockar</h1>
        </div>   
    
    <!--  <h1 class="text-center">Módulos</h1>-->
    <br/>
    <br/>
    <!-- Aqui comienzan las cards -->
        <!-- Aqui card Productos -->
        <div class="row" >
          <div class="col-sm-4">
              <div class="card" style="width: 18rem;">
                <img src="css/img/calzado2.jfif" class="card-img-top" alt="Productos">
                <div class="card-body">
                  <h5 class="card-title">
                  <a href="http://localhost/stockar/productos.php" class="card-link">Productos</a>
                  </h5>
       <!--           <p class="card-text">
                  <li>Alta</li> 
                  <li>Baja</li> 
                  <li>Modificación</li>
                  <li>Búsqueda</li></p>-->
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                  <a href="color_productos.php" class="card-link">Colores</a></li>
                  <li class="list-group-item">
                  <a href="genero_productos.php" class="card-link">Géneros</a></li>
                  <li class="list-group-item">
                  <a href="marca_productos.php" class="card-link">Marcas</a></li>
                  <li class="list-group-item">
                  <a href="modelo_productos.php" class="card-link">Modelos</a></li>
                  <li class="list-group-item">
                  <a href="http://localhost/stockar/tipo_productos.php" class="card-link" height="180px">Tipos</a></li>
                </ul>
            </div>
          </div>

              <!-- Aqui card Sucursal -->
          <div class="col-sm-4">
              <div class="card" style="width: 18rem;">
            <img src="css/img/sucursales1.jfif" class="card-img-top" alt="Sucursales" height="180px">
            <div class="card-body">
              <h5 class="card-title">
              <a href="sucursal.php" class="card-link">Sucursal</a>
              </h5>
      <!--         <p class="card-text">
              <li>Alta</li> 
              <li>Baja</li> 
              <li>Modificación</li>
              <li>Búsqueda</li>-->
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
              <a href="http:\\localhost\stockar\almacen.php" class="card-link">Almacenes</a></li>
            </ul>
        </div>
      </div>
               <!-- Aqui card Stock -->
               <div class="col-sm-4">
              <div class="card" style="width: 18rem;">
            <img src="css/img/stock1.jfif" class="card-img-top" alt="Productos" height="180px">
            <div class="card-body">
              <h5 class="card-title">
              <a href="stock.php" class="card-link">Stock</a>
              </h5>
     <!--          <p class="card-text">
              <li>Alta</li> 
              <li>Baja</li> 
              <li>Modificación</li>
              <li>Búsqueda</li>-->
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
              <a href="movimientos.php" class="card-link">Movimientos</a></li>
            </ul>
        </div>
      </div>
    </div>
    <?php require_once("Template/footer.php");?>

   </body>

</html>