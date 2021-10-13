<?php
/* Smarty version 3.1.39, created on 2021-09-28 17:03:58
  from 'C:\xampp\htdocs\proyectos\web2-2021\TPE-master\templates\forms\formCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61532ede717d91_89552337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '859896cf372db262e28ca5a892c49bf3f5c95597' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-2021\\TPE-master\\templates\\forms\\formCategoria.tpl',
      1 => 1632841154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61532ede717d91_89552337 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="addCategoria" method="post">

    <input type="text" name="nombre" id="nombre" placeholder="Nombre Categoria" required>    
    <input type="submit" value="Agregar"> 

</form><?php }
}
