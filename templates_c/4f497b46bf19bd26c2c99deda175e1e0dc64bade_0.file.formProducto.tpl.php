<?php
/* Smarty version 3.1.39, created on 2021-09-28 16:44:20
  from 'C:\xampp\htdocs\proyectos\web2-2021\TPE-master\templates\formProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61532a44a2aad8_65405944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f497b46bf19bd26c2c99deda175e1e0dc64bade' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-2021\\TPE-master\\templates\\formProducto.tpl',
      1 => 1632840258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61532a44a2aad8_65405944 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="addProducto" method="post">
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
</form><?php }
}
