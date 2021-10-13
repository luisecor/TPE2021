<?php
/* Smarty version 3.1.39, created on 2021-10-12 18:14:59
  from 'C:\xampp\htdocs\proyectos\web2-2021\TPE-Bootstrap\ANITA\TPE-master\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165b4832c1385_84324150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a8bf4715d710be7ec90662fcf8f3e1ba7b6b9cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2-2021\\TPE-Bootstrap\\ANITA\\TPE-master\\templates\\header.tpl',
      1 => 1633654611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6165b4832c1385_84324150 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>TecnoShop!</title>
  </head>
  <body>
    


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TecnoShop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL;?>
">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL;?>
verProductos">Productos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
            <li> <a class="dropdown-item" href="<?php echo BASE_URL;?>
verCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
 </a></li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <li><hr class="dropdown-divider"></li>
          <li> <a class="dropdown-item" href="<?php echo BASE_URL;?>
verCategorias"> Ver Categrias </a></li>

          
          </ul>
        </li>
        
        <?php if ($_smarty_tpl->tpl_vars['logueado']->value) {?>
        <li class="nav-item">
           <a class="nav-link" href="<?php echo BASE_URL;?>
showFormProduct">Agregar Producto</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="<?php echo BASE_URL;?>
showFormCategoria">Agregar Categoria</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="<?php echo BASE_URL;?>
logout">Logout</a>
        </li>
        <?php } else { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL;?>
login">Login</a>
        </li>
        <?php }?>
        
      </ul>
      <form class="d-flex" action ="<?php echo BASE_URL;?>
searchClave">
        <input class="form-control me-2" type="input" name='search' placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </div>
  </div>
</nav>
<div class="container-fluid">
<div class="row justify-content-md-center">
<div class="col-11">


<?php }
}
