<?php
/* Smarty version 3.1.39, created on 2021-10-13 22:11:23
  from 'C:\xampp\htdocs\proyectos\web2-2021\TPE-Bootstrap\ANITA\TPE-master\templates\forms\formCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61673d6b17f5b3_46730520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e9695a5102e8a317c92d45f5b6cfa3e185566d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-2021\\TPE-Bootstrap\\ANITA\\TPE-master\\templates\\forms\\formCategoria.tpl',
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
function content_61673d6b17f5b3_46730520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row justify-content-md-center">
    <div class="col-11">
        <div class="p-md-3 m-md-3 container bg-light">
            <?php if ($_smarty_tpl->tpl_vars['categoria']->value) {?>
                <h3 class="text-center m-md-3 p-md-3"> Modificar categoria </h3>
                <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
updateCategoria" method="post">
                    <div class="row mb-3">
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre" name="nombre" required value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
">
                        </div>
                    </div>
                    <input type="number" name="id" id="id" hidden  required value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">  
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </form>
            <?php } else { ?>
                <h3 class="text-center m-md-3 p-md-3"> Agregar nueva categoria </h3>
                <form  action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
addCategoria" method="post">
                    <div class="row mb-3">
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre" name="nombre" required  placeholder="Nombre Categoria Nueva">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
            <?php }?>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
