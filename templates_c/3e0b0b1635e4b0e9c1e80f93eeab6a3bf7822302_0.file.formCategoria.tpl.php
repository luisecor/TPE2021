<?php
/* Smarty version 3.1.39, created on 2021-10-08 04:40:23
  from 'C:\xampp\htdocs\Web2\TPE-master-ultimaCopia\templates\forms\formCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615faf970296c9_94227488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e0b0b1635e4b0e9c1e80f93eeab6a3bf7822302' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TPE-master-ultimaCopia\\templates\\forms\\formCategoria.tpl',
      1 => 1633660818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_615faf970296c9_94227488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
addCategoria" method="post">

    <input type="text" name="nombre" id="nombre" placeholder="Nombre Categoria" <?php if ($_smarty_tpl->tpl_vars['categoria']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
" <?php }?> required>    
    <input type="submit" <?php if ($_smarty_tpl->tpl_vars['categoria']->value) {?> value="Modificar" <?php } else { ?> value="Agregar"} <?php }?> > 

</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
