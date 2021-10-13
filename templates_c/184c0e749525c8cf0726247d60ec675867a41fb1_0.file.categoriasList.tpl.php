<?php
/* Smarty version 3.1.39, created on 2021-10-08 03:42:16
  from 'C:\xampp\htdocs\Web2\TPE-master-ultimaCopia\templates\categoriasList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615fa1f853f773_96853053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '184c0e749525c8cf0726247d60ec675867a41fb1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TPE-master-ultimaCopia\\templates\\categoriasList.tpl',
      1 => 1633657334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_615fa1f853f773_96853053 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Categorías</h2>

<table class="table">
    <thead>
        <tr>
        <th scope="col">Nombre</th>
        <?php if ($_smarty_tpl->tpl_vars['logueado']->value) {?>
            <th></th>
            <th></th>
        <?php }?>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
            <tr>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
verCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
 </a></td>
                <?php if ($_smarty_tpl->tpl_vars['logueado']->value) {?>
                    <td scope="row"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
updateCategoria/<?php ob_start();
echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
">Update</a></td>   
                    <td scope="row"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
eliminarCategoria/<?php ob_start();
echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
">Eliminar</a></td>      
                <?php }?>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
<div class="container alert alert-danger" role="alert">
  <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

</div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
