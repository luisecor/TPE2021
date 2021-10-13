<?php
/* Smarty version 3.1.39, created on 2021-10-12 19:56:07
  from 'C:\xampp\htdocs\proyectos\web2-2021\TPE-Bootstrap\ANITA\TPE-master\templates\forms\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165cc37371a35_31749097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '094c4b09c3a63a655df48637297434542dbe8d9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-2021\\TPE-Bootstrap\\ANITA\\TPE-master\\templates\\forms\\login.tpl',
      1 => 1634061365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_6165cc37371a35_31749097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="container p-md-5 m-md-3 text-center bg-light">
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <form class="text-center"action="verify" method="post">
            <div class="col">
                <input type="email" class="form-control " name="email" id="email" placeholder="Email" required>
            </div>
            <div class="col">
                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
            </div>
            <div class="float-start">
            <input type="submit" class="btn btn-primary" value="Entrar">
            </div>
        </form>       
    </div>


<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
