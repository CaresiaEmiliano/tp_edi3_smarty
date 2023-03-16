<?php
/* Smarty version 4.2.1, created on 2023-03-16 19:43:45
  from 'C:\Users\Emiliano\Documents\Instituto\EDI_III\Smarty\templates\generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641363616ead90_26432863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fdb9610c04e7a9f3857f349386265b37e594052' => 
    array (
      0 => 'C:\\Users\\Emiliano\\Documents\\Instituto\\EDI_III\\Smarty\\templates\\generos.tpl',
      1 => 1678992219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641363616ead90_26432863 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <title>Generos</title>
    <?php echo '<script'; ?>
 type="type/javascript" source="./script/genero_producto.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div>
        <table id="generos">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
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
