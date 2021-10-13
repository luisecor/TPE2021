<?php
/* Smarty version 3.1.39, created on 2021-10-08 03:14:58
  from 'C:\xampp\htdocs\Web2\TPE-master-ultimaCopia\templates\productsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f9b924d7ef0_86710596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ecefc523d741ac55000a2405300d47fa7d5cda9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TPE-master-ultimaCopia\\templates\\productsList.tpl',
      1 => 1633655390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_615f9b924d7ef0_86710596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Lista de productos</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Categoria</th>
       <?php if ($_smarty_tpl->tpl_vars['logueado']->value) {?>
        <th></th>
        <th></th>
      <?php }?>
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
       <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
verProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
"> <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
 </a> </td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</td>
  <?php if ($_smarty_tpl->tpl_vars['logueado']->value) {?>
      <td scope="row"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
updateProductoMenu/<?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
">Update</a></td>   
      <td scope="row"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
eliminarProducto/<?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;
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


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
