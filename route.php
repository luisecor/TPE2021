<?php

require_once 'Controller/ProductoController.php';
require_once 'Controller/CategoriaController.php';
require_once 'Controller/UsuariosController.php';


define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$categoriaController = new CategoriaController();
$productoController = new ProductoController();
$usuariosController = new UsuariosController();
$usuariosController = new UsuariosController();

switch ($params[0]) {
    case 'home': 
        $categoriaController->showHome(); 
        break;
    case 'verProducto':
        $productoController->showProduct($params[1]);
        break;
    case 'eliminarProducto':
        $productoController->eliminarProducto($params[1]);
        break;
    case 'verProductos': 
        $productoController->getProducts(); 
        break;
    case 'verCategorias': 
        $categoriaController->getCategorias(); 
        break;
    case 'verCategoria': 
        $categoriaController->verPorCategoria($params[1]); 
        break;
    case 'addProducto':
        $productoController->addProducto();
        break;
    case 'showFormProduct':
        $productoController->showFormProductos();
        break;
    case 'showFormCategoria':
        $categoriaController->showFormCategorias();
        break;  
    case 'addCategoria':
        $categoriaController->addCategoria();
        break;
    case 'eliminarCategoria':
        $categoriaController->eliminarCategoria($params[1]);
        break;
    case 'updateCategoriaMenu': 
        $categoriaController->updateCategoriaMenu($params[1]);
        break;
    case 'updateCategoria': 
        $categoriaController->updateCategoria();
        break;
    case 'updateProducto':
        $productoController->updateProducto();
        break;      
    case 'updateProductoMenu':
        $productoController->updateProductoMenu($params[1]);
        break;
    case 'searchClave':
        $categoriaController->showHome();
        break;
    case 'login':
        $usuariosController->showLogin();
        break;
    case 'verify':
        $usuariosController->verifyLogin();
        break;
    case 'logout':
        $usuariosController->logout();
        break;
    case 'signIn':
        $usuariosController->formNewUser();
        break;
    case 'newUser':
        $usuariosController->newUser();
        break;
    default: 
        echo('404 Page not found'); 
        break;
}
