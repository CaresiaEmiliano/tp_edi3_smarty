<?php
/* Smarty version 4.2.1, created on 2023-03-17 16:51:46
  from 'C:\Users\Emiliano\Documents\Instituto\EDI_III\tp_edi3_smarty\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64148c92b80c05_82047111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7849a04825d7815c22c2c3acc0fe693fc8cfa12' => 
    array (
      0 => 'C:\\Users\\Emiliano\\Documents\\Instituto\\EDI_III\\tp_edi3_smarty\\templates\\productos.tpl',
      1 => 1679068302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/header.tpl' => 1,
    'file:../templates/footer.tpl' => 1,
  ),
),false)) {
function content_64148c92b80c05_82047111 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:../templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <table>
            <thead>
                <tr>
                    <th>Sku</th>
                    <th>Nombre</th>
                    <th>Talle</th>
                    <th>Precio de Costo</th>
                    <th>Observación</th>
                    <th>Categoría</th>
                    <th>Tipo de Producto</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Marca</th>
                    <th>Género</th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["sku"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["nombre"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["talle"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["precio_costo"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["descripcion"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["categoria"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["d_tipo"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["d_modelo"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["d_color"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["d_marca"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["d_genero"];?>
</td>
                    <td><button type="button" name="editar" id="btn_editar">Editar</button></td>
                    <td><button type="button" name="borrar" id="btn_borrar">Borrar</button></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
