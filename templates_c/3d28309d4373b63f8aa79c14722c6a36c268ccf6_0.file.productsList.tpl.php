<?php
/* Smarty version 3.1.39, created on 2021-10-07 18:54:28
  from 'C:\xampp\htdocs\proyectos\web2-2021\TPE-Bootstrap\TPE-master\templates\productsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f2644993630_50122816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d28309d4373b63f8aa79c14722c6a36c268ccf6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-2021\\TPE-Bootstrap\\TPE-master\\templates\\productsList.tpl',
      1 => 1633625663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_615f2644993630_50122816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Lista de productos</h2>



<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Categoria</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
    <tr>
    
    <?php if ($_smarty_tpl->tpl_vars['logueado']->value) {?>
        <td scope="row"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
updateProductoMenu/<?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
 </a></td>
    <?php } else { ?>
        <td scope="row"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
        
    <?php }?>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</td>
            </a>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  </tbody>
</table>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
