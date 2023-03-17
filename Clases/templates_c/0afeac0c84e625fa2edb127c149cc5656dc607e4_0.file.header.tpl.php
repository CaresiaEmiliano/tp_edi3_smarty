<?php
/* Smarty version 4.2.1, created on 2023-03-17 17:08:58
  from 'C:\Users\Emiliano\Documents\Instituto\EDI_III\tp_edi3_smarty\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6414909aac9398_23558856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0afeac0c84e625fa2edb127c149cc5656dc607e4' => 
    array (
      0 => 'C:\\Users\\Emiliano\\Documents\\Instituto\\EDI_III\\tp_edi3_smarty\\templates\\header.tpl',
      1 => 1679069333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6414909aac9398_23558856 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href= "css/estilos.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/css/img/faviconS.ico" type="image/x-icon">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
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
            <a class="navbar-brand" href="/">StockaR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Productos
                    </a>
                    <ul class="dropdown-menu">
                    <li><a href="productos" class="dropdown-item">Productos</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item">Colores</a></li>
                    <li><a class="dropdown-item">Géneros</a></li>
                    <li><a class="dropdown-item">Marcas</a></li>
                    <li><a class="dropdown-item">Modelos</a></li>
                    <li><a class="dropdown-item">Tipos</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Sucursal</a>
                    <ul class="dropdown-menu">
                    <li><a href="sucursal" class="dropdown-item" >Sucursales</a></li>                    
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" >Almacenes</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Stock</a>
                    <ul class="dropdown-menu">
                    <li><a href="stock" class="dropdown-item" >Stock</a></li>                    
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" >Movimientos</a></li>
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
