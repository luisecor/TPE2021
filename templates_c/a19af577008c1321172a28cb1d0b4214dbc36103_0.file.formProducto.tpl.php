<?php
/* Smarty version 3.1.39, created on 2021-10-06 23:31:42
  from 'C:\xampp\htdocs\proyectos\web2-2021\TPE-master\templates\forms\formProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615e15be95c772_51763615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a19af577008c1321172a28cb1d0b4214dbc36103' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-2021\\TPE-master\\templates\\forms\\formProducto.tpl',
      1 => 1633555900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615e15be95c772_51763615 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['categorias']->value)) && !(isset($_smarty_tpl->tpl_vars['producto']->value))) {?>
<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
addProducto" method="post">
    <input type="text" name="nombre" id="nombre" placeholder="Nombre Producto" required>
    <input type="number" name="precio" id="precio" placeholder="100" required>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
        <label for="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
 </label>
        <input type="radio" id="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" name="categoria" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" required>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion del producto" required>
    
    <input type="submit" value="Agregar"> 

    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['producto']->value)) && (isset($_smarty_tpl->tpl_vars['categorias']->value))) {?>
<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
updateProducto" method="post">
    
    <input type="text" name="nombre" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
" required>
    <input type="number" name="precio" id="precio" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
" required>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
        <label for="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
 </label>
        <?php if ($_smarty_tpl->tpl_vars['producto']->value->fk_categoria == $_smarty_tpl->tpl_vars['categoria']->value->id_categoria) {?> 
            <input type="radio" id="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" name="categoria" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" required checked>
        <?php } else { ?> 
         <input type="radio" id="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" name="categoria" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" required>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <input type="text" name="descripcion" id="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
" required>
    <input type="number" name="id" id="id" hidden dissabled required value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">
    
    <input type="submit" value="Update"> 

    <?php }?>

</form><?php }
}
