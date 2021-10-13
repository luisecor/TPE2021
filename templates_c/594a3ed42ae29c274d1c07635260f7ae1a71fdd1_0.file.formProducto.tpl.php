<?php
/* Smarty version 3.1.39, created on 2021-10-12 19:38:28
  from 'C:\xampp\htdocs\proyectos\web2-2021\TPE-Bootstrap\ANITA\TPE-master\templates\forms\formProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165c814006314_83573783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '594a3ed42ae29c274d1c07635260f7ae1a71fdd1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-2021\\TPE-Bootstrap\\ANITA\\TPE-master\\templates\\forms\\formProducto.tpl',
      1 => 1634060305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6165c814006314_83573783 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    <?php if ((isset($_smarty_tpl->tpl_vars['categorias']->value)) && !(isset($_smarty_tpl->tpl_vars['producto']->value))) {?>
    <h3 class="text-center"> Agregar nuevo Producto </h3>
<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
addProducto" method="post">
    
          <div class="row mb-3">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombre" name="nombre" required >
        </div>
      </div>
      <div class="row mb-3">
        <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="descripcion" name="descripcion"  required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="precio" class="col-sm-2 col-form-label">Precio</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="precio" name="precio" required>
        </div>
      </div>
      <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Categorias</legend>
        <div class="col-sm-10">


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
          <div class="form-check">

            <input required class="form-check-input" type="radio" name="categoria" id="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" >
         
            <label class="form-check-label" for="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">
              <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>

            </label>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



        </div>
      </fieldset>
    
      
      <button type="submit" class="btn btn-primary">Agregar</button>

    <?php }?>



    <?php if ((isset($_smarty_tpl->tpl_vars['producto']->value)) && (isset($_smarty_tpl->tpl_vars['categorias']->value))) {?>
    

     <h3 class="text-center"> Modificar  Producto </h3>
    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
updateProducto" method="post">
  <div class="row mb-3">
    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nombre" name="nombre" required value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
">
    </div>
  </div>
  <div class="row mb-3">
    <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Precio</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="precio" name="precio"value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
" required>
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Categorias</legend>
    <div class="col-sm-10">


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
      <div class="form-check">
      <?php if ($_smarty_tpl->tpl_vars['producto']->value->fk_categoria == $_smarty_tpl->tpl_vars['categoria']->value->id_categoria) {?> 
        <input class="form-check-input" type="radio" name="categoria" id="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" checked>
       <?php } else { ?>
        <input class="form-check-input" type="radio" name="categoria" id="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" >
       <?php }?> 
        <label class="form-check-label" for="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">
          <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>

        </label>
      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>




    </div>
  </fieldset>
  <input type="number" name="id" id="id" hidden required value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">
  
  <button type="submit" class="btn btn-primary">Modificar</button>
</form>

    <?php }?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
