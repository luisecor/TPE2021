<?php
/* Smarty version 3.1.39, created on 2021-11-24 03:49:35
  from 'C:\xampp\htdocs\proyectos\web2-2021\TPE-Bootstrap\ANITA\TPE-master\templates\productsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619da83f33a0a4_10629863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bec61b05ad8ad6bdbbbc0d033414c9d259b1636' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-2021\\TPE-Bootstrap\\ANITA\\TPE-master\\templates\\productsList.tpl',
      1 => 1637721496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619da83f33a0a4_10629863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row justify-content-md-center">
    <div class="col-11">

    

        <div class="container text-center">
            <h2 class="text-center m-md-3 p-md-3">Lista de productos</h2>
        </div>
        <div class="row border p-1">
            <div class="row col-9">
                <div class="col">
                    <h5> Nombre </h5>
                </div>
                <div class="col">
                    <h5> Precio </h5>
                </div>
                <div class="col">
                    <h5> Categoria </h5>
                </div>
                <div class="col">
                    <h5> Descripcion </h5>
                </div>
            </div>

            <div class="accordion accordion-flush">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                    <div class="row">
                        <div class="accordion-item">
                            <div class="accordion-button collapsed"> 
                                <div class="col"> <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
 </div>
                                <div class="col"> <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
 </div>
                                <div class="col"><?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
 </div>
                                <div class="col"><a class="btn btn-outline-secondary btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
verProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
"> Descripción </a> </div>
                                <?php if ($_smarty_tpl->tpl_vars['logueado']->value && $_smarty_tpl->tpl_vars['roleUser']->value == 1) {?>
                                    <div class="col-1 " scope="row">
                                        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
updateProductoMenu/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Update</a>
                                    </div>
                                    <div class="col-1" scope="row">
                                        <a class="btn btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
eliminarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">Eliminar</a>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
