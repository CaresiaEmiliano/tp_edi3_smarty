<?php
/* Smarty version 4.2.1, created on 2023-03-16 22:08:35
  from 'C:\xampp\htdocs\tp_edi3_smarty\templates\sucursales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6413855364bcf3_42073217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3588377aad9d6f610874f7b53cb3cf828a320ab7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_edi3_smarty\\templates\\sucursales.tpl',
      1 => 1679000910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6413855364bcf3_42073217 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css/estilos.css"></link>
</head>
<body>
    <div>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Domicilio</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultado']->value, 'fila');
$_smarty_tpl->tpl_vars['fila']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
$_smarty_tpl->tpl_vars['fila']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["id"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["nombre"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["telefono"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["domicilio"];?>
</td>
                    <td><button type="button" name="editar" id="btn_editar">Editar</button></td>
                    <td><button type="button" name="borrar" id="btn_borrar">Borrar</button></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
</body><?php }
}
