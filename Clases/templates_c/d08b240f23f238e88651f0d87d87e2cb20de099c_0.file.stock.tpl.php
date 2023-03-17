<?php
/* Smarty version 4.2.1, created on 2023-03-17 16:45:00
  from 'C:\Users\Emiliano\Documents\Instituto\EDI_III\tp_edi3_smarty\templates\stock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64148afce9e547_37883215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd08b240f23f238e88651f0d87d87e2cb20de099c' => 
    array (
      0 => 'C:\\Users\\Emiliano\\Documents\\Instituto\\EDI_III\\tp_edi3_smarty\\templates\\stock.tpl',
      1 => 1679067895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/header.tpl' => 1,
    'file:../templates/footer.tpl' => 1,
  ),
),false)) {
function content_64148afce9e547_37883215 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <th>Categoria</th>
                    <th>Precio de Costo</th>
                    <th>Stock actual</th>
                </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultado']->value, 'fila');
$_smarty_tpl->tpl_vars['fila']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
$_smarty_tpl->tpl_vars['fila']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["sku_producto"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["nombre"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["talle"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["categoria"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["precio_costo"];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fila']->value["totales"];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
