<?php
/* Smarty version 3.1.39, created on 2021-10-05 03:00:59
  from 'C:\xampp\htdocs\proyectos\web2-2021\TPE-master\templates\productsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615ba3cb4315d3_48641894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e830b264dc4fbe267ac5cb4779053578946c8697' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-2021\\TPE-master\\templates\\productsList.tpl',
      1 => 1633395545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_615ba3cb4315d3_48641894 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Lista de productos</h2>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
verProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
"> <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
 </a> - Precio: $<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>

                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
updateProductoMenu/<?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
"> Update </a>
            </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
