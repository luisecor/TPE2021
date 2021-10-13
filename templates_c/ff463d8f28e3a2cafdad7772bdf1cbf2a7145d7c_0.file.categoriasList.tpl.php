<?php
/* Smarty version 3.1.39, created on 2021-10-07 18:57:55
  from 'C:\xampp\htdocs\proyectos\web2-2021\TPE-Bootstrap\TPE-master\templates\categoriasList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f2713848d26_69110618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff463d8f28e3a2cafdad7772bdf1cbf2a7145d7c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-2021\\TPE-Bootstrap\\TPE-master\\templates\\categoriasList.tpl',
      1 => 1633558274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_615f2713848d26_69110618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Categorías</h2>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
            <li>
                <a href="verCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
 </a>
            </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
