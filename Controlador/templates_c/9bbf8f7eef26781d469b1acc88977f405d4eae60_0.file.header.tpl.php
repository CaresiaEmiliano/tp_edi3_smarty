<?php
/* Smarty version 4.2.1, created on 2023-03-16 23:58:51
  from 'C:\xampp\htdocs\tp_edi3_smarty\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64139f2bbb7bc3_89141046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bbf8f7eef26781d469b1acc88977f405d4eae60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_edi3_smarty\\templates\\header.tpl',
      1 => 1679007453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64139f2bbb7bc3_89141046 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="css/estilos.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

<div class="header">
    <!-- Navigation Bar -->
    <!-- clase expandida
    <nav class="navbar navbar-expand-lg bg-light">
    -->
        <!-- clase no expandida
    <nav class="navbar bg-light">
    -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid" >
            <a class="navbar-brand" href="#">StockaR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="producto.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Productos
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="productos.php">Productos</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="http:\\localhost\stockar\color_productos.php">Colores</a></li>
                    <li><a class="dropdown-item" href="http:\\localhost\stockar\genero_productos.php">Géneros</a></li>
                    <li><a class="dropdown-item" href="http:\\localhost\stockar\marca_productos.php">Marcas</a></li>
                    <li><a class="dropdown-item" href="http:\\localhost\stockar\modelo_productos.php">Modelos</a></li>
                    <li><a class="dropdown-item" href="http:\\localhost\stockar\tipo_productos.php">Tipos</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http:\\localhost\stockar\sucursal.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sucursal</a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="http:\\localhost\stockar\sucursal.php">Sucursales</a></li>                    
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="http:\\localhost\stockar\almacen.php">Almacenes</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  href="http:\\localhost\stockar\stock.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Stock</a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="http:\\localhost\stockar\stock.php">Stock</a></li>                    
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="http:\\localhost\stockar\movimientos.php">Movimientos</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Sesion/cerrar_sesion.php">Salir</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        </div>
<?php }
}