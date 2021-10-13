<?php
/* Smarty version 3.1.39, created on 2021-10-07 18:57:43
  from 'C:\xampp\htdocs\proyectos\web2-2021\TPE-Bootstrap\TPE-master\templates\forms\formCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f27078e5c24_87187981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22b0fd3b28f036f1844985ba5ca1c43f675cd0c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-2021\\TPE-Bootstrap\\TPE-master\\templates\\forms\\formCategoria.tpl',
      1 => 1633625814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_615f27078e5c24_87187981 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
addCategoria" method="post">

    <input type="text" name="nombre" id="nombre" placeholder="Nombre Categoria" required>    
    <input type="submit" value="Agregar"> 

</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
