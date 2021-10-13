<?php
/* Smarty version 3.1.39, created on 2021-10-07 16:30:46
  from 'C:\xampp\htdocs\proyectos\web2-2021\TPE-Bootstrap\TPE-master\templates\forms\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f049609ddc5_13581260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1d9cab7e40b37175bbc7b287b61eea7e8229c0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-2021\\TPE-Bootstrap\\TPE-master\\templates\\forms\\login.tpl',
      1 => 1633616834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_615f049609ddc5_13581260 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<div>
    <div > 
        <form action="verify" method="post">
            <div>
                <input type="text" name="email" id="email" placeholder="Email" required>
            <div>
            <div>
                <input type="password" name="password" id="password" placeholder="Contraseña" required>
            <div>
            <input type="submit" value="Entrar">
        </form>
    </div>

    <div>
        <h4><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
