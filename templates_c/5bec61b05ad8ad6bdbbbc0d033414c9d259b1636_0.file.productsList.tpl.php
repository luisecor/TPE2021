<?php
/* Smarty version 3.1.39, created on 2021-10-13 22:04:24
  from 'C:\xampp\htdocs\proyectos\web2-2021\TPE-Bootstrap\ANITA\TPE-master\templates\productsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61673bc8a23f21_53087944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bec61b05ad8ad6bdbbbc0d033414c9d259b1636' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-2021\\TPE-Bootstrap\\ANITA\\TPE-master\\templates\\productsList.tpl',
      1 => 1634155393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61673bc8a23f21_53087944 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row justify-content-md-center">
  <div class="col-11">

    <div class="container text-center">
        <h2 class="text-center m-md-3 p-md-3">Lista de productos</h2>
    </div>
    <div class="row border p-1"> 
      <div class="row">
        <div class="col"> <h5> Nombre </h5></div> 
        <div class="col"> <h5> Precio  </h5></div>
        <div class="col"><h5> Categoria  </h5></div> 
      </div>

        <div class="accordion accordion-flush" id="accordionFlushExample">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
            <div class="row">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" aria-expanded="false" aria-controls="flush-<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">
                    <div class="col"> <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
 </div> <div class="col"> <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
 </div><div class="col"><?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
 </div>
                  </button>
                </h2>
                <div id="flush-<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" class=" row accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" data-bs-parent="#accordionFlushExample">
                  <hr class="dropdown-divider">
                  <div class=" col-10"> <h5> Descripcion </h5><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</div>
                    <?php if ($_smarty_tpl->tpl_vars['logueado']->value) {?>
                      <div  class="col-1 "scope="row"><a class="btn btn-primary"href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
updateProductoMenu/<?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
">Update</a></div>   
                      <div class="col-1"scope="row"><a class="btn btn-warning"href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
eliminarProducto/<?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
">Eliminar</a></div>      
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
