<?php
/* Smarty version 3.1.39, created on 2021-10-08 02:39:00
  from 'C:\xampp\htdocs\Web2\TPE-master-ultimaCopia\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f93248c0a34_27456616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1010d7edad86cad012e2581097d6f67d098105c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TPE-master-ultimaCopia\\templates\\product.tpl',
      1 => 1633555713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_615f93248c0a34_27456616 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h2>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
