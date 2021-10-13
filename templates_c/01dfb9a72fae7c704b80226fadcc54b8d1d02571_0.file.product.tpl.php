<?php
/* Smarty version 3.1.39, created on 2021-10-07 01:07:38
  from 'C:\xampp\htdocs\proyectos\web2-2021\TPE-Bootstrap\TPE-master\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615e2c3a081fb3_19173471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01dfb9a72fae7c704b80226fadcc54b8d1d02571' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-2021\\TPE-Bootstrap\\TPE-master\\templates\\product.tpl',
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
function content_615e2c3a081fb3_19173471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h2>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
