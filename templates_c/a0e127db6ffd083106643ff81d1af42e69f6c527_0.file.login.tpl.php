<?php
/* Smarty version 3.1.39, created on 2021-10-08 04:30:57
  from 'C:\xampp\htdocs\Web2\TPE-master-ultimaCopia\templates\forms\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615fad6101f995_03306128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0e127db6ffd083106643ff81d1af42e69f6c527' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TPE-master-ultimaCopia\\templates\\forms\\login.tpl',
      1 => 1633659800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_615fad6101f995_03306128 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="container p-md-5 m-md-3 text-center bg-light">
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <form action="verify" method="post">
            <div class="col-md-4 col-md-offset-4 mb-3">
                <input type="email" class="form-control " name="email" id="email" placeholder="Email" required>
            </div>
            <div class="col-md-4 col-md-offset-4 mb-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
            </div>
            <div class="col-md-4 col-md-offset-4 mb-3">
            <input type="submit" class="btn btn-primary" value="Entrar">
            </div>
        </form>       
    </div>


<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
