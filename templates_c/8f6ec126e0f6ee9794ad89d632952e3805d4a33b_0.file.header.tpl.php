<?php
/* Smarty version 3.1.39, created on 2021-10-05 02:59:10
  from 'C:\xampp\htdocs\proyectos\web2-2021\TPE-master\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615ba35e294d06_26799549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f6ec126e0f6ee9794ad89d632952e3805d4a33b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-2021\\TPE-master\\templates\\header.tpl',
      1 => 1633395521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615ba35e294d06_26799549 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPE</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a class="hipervinculos" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
verProductos">Productos</a></li>
            <li><a class="hipervinculos" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
verCategorias">Categorias</a></li>
        </ul>
    </nav>
</header>

<?php }
}
