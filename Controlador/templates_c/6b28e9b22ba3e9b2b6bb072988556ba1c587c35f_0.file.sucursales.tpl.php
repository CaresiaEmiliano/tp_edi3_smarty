<?php
/* Smarty version 4.2.1, created on 2023-03-16 20:34:26
  from 'C:\Users\Emiliano\Documents\Instituto\EDI_III\Smarty\templates\sucursales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64136f429264c0_08651240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b28e9b22ba3e9b2b6bb072988556ba1c587c35f' => 
    array (
      0 => 'C:\\Users\\Emiliano\\Documents\\Instituto\\EDI_III\\Smarty\\templates\\sucursales.tpl',
      1 => 1678995226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64136f429264c0_08651240 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css/estilos.css"></link>
</head>
<body>
    <div>
        <table id="generos">
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
</body>
<?php }
}
