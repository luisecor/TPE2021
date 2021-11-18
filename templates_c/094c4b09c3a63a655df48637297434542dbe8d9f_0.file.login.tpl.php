<?php
/* Smarty version 3.1.39, created on 2021-11-18 16:17:28
  from 'C:\xampp\htdocs\proyectos\web2-2021\TPE-Bootstrap\ANITA\TPE-master\templates\forms\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61966e8843c030_56272198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '094c4b09c3a63a655df48637297434542dbe8d9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-2021\\TPE-Bootstrap\\ANITA\\TPE-master\\templates\\forms\\login.tpl',
      1 => 1637246112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_61966e8843c030_56272198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row justify-content-md-center">
    <div class="col-11">

        <div class="container p-md-5 m-md-3 text-center bg-light">
            <h1 class="p-md-3 m-md-3"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
            <form class="text-center"action="verify" method="post">
                <div class="d-grid gap-2 col-5 mx-auto">
                    <div class="p-md-1">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="p-md-1">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
                    </div>
                    <div class="p-md-1">
                        <input type="submit" class="btn btn-primary" value="Entrar">
                    </div>
                </div>
            </form>       
        </div>
        
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
