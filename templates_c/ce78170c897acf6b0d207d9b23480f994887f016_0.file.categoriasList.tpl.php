<?php
/* Smarty version 3.1.39, created on 2021-11-18 18:40:28
  from 'C:\xampp\htdocs\proyectos\web2-2021\TPE-Bootstrap\ANITA\TPE-master\templates\categoriasList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6196900cb9aef5_05179370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce78170c897acf6b0d207d9b23480f994887f016' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-2021\\TPE-Bootstrap\\ANITA\\TPE-master\\templates\\categoriasList.tpl',
      1 => 1637256605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_6196900cb9aef5_05179370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row justify-content-md-center">
    <div class="col-11">

        <div class="container text-center">
            <h2 class="text-center m-md-3 p-md-3">Lista de Categorías</h2>
        </div>
        <div class="row border p-1">
            <div class="row">
                <div class="col">
                    <h5> Nombre </h5>
                </div>
            </div>

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                    <div class="row">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" aria-expanded="false"
                                    aria-controls="flush-<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">
                                    <div class="col"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
 </div>


                                </button>
                            </h2>
                            <div id="flush-<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" class=" row accordion-collapse collapse"
                                aria-labelledby="flush-heading<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"
                                data-bs-parent="#accordionFlushExample">


                                <div class="row">
                                    <div class="row">
                                        <div class="col">
                                            <h6> Nombre </h6>
                                        </div>
                                        <div class="col">
                                            <h6> Precio </h6>
                                        </div>
                                        <div class="col">
                                            <h6> Categoria </h6>
                                        </div>
                                    </div>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                                        <div class="row m-md-1">
                                            <?php if ($_smarty_tpl->tpl_vars['producto']->value->fk_categoria == $_smarty_tpl->tpl_vars['categoria']->value->id_categoria) {?>
                                                <div class="col"> <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
 </div>
                                                <div class="col"> <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
 </div>
                                                <div class="col"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
 </div>
            
                                            <?php }?>
                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php if ($_smarty_tpl->tpl_vars['logueado']->value && $_smarty_tpl->tpl_vars['roleUser']->value == 1) {?>
                                        <div class="col-1" scope="row">
                                            <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
updateCategoriaMenu/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">Update</a>
                                        </div>
                                        <div class="col-1" scope="row">
                                            <a class="btn btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
eliminarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">Eliminar</a>
                                        </div>
                                    <?php }?>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>

            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="container alert alert-danger" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                </div>
            <?php }?>
        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
