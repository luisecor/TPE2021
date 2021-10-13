<?php
/* Smarty version 3.1.39, created on 2021-09-23 17:05:37
  from 'C:\xampp\htdocs\Web2\TPE\templates\productsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614c97c17fc5f1_00881796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0afe5a0b64b57482542e602b8488cb745b8ec60c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TPE\\templates\\productsList.tpl',
      1 => 1632409431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_614c97c17fc5f1_00881796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Lista de products</h2>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
            <li>
                <a href="verProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
"> <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
 </a> - Precio: $<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>

            </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
