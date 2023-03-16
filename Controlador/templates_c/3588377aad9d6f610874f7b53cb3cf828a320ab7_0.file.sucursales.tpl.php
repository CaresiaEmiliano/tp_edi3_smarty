<?php
/* Smarty version 4.2.1, created on 2023-03-16 21:22:05
  from 'C:\xampp\htdocs\tp_edi3_smarty\templates\sucursales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64137a6d4b3b81_74028494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3588377aad9d6f610874f7b53cb3cf828a320ab7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_edi3_smarty\\templates\\sucursales.tpl',
      1 => 1678996091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64137a6d4b3b81_74028494 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css/estilos.css"></link>
</head>
<body>
    <div>
        <table id="sucursales">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
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
                    <td><button type="button" name="editar" id="<?php echo $_smarty_tpl->tpl_vars['fila']->value['id'];?>
" class="btn btn-warning btn-xs editar" onclick="modal('editar');">Editar</button></td>
                    <td><button type="button" name="borrar" id="<?php echo $_smarty_tpl->tpl_vars['fila']->value['id'];?>
" class="btn btn-danger btn-xs borrar">Borrar</button></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
</body><?php }
}
