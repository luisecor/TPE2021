<?php

require_once 'libs\Router.php';
require_once 'Controller/ApiComentariosController.php';
require_once 'Controller/ApiProductosController.php';

$router = new Router();

//comentarios
//$router->addRoute('reviews', 'GET', 'ApiComentariosController', 'getComentarios');--->End Point al implementado, necesitamos el producto y tenemos 2 endpoinst iguales
$router->addRoute('reviews/product/:ID', 'GET', 'ApiComentariosController', 'getComentarios'); //--> Traer todos los comentarios de un cierto proucto
$router->addRoute('reviews/product/:ID', 'POST', 'ApiComentariosController', 'insertarComentario');
$router->addRoute('reviews/:ID', 'GET', 'ApiComentariosController', 'getComentario');
//$router->addRoute('reviews', 'POST', 'ApiComentariosController', 'insertarComentario'); //alta de comentario
$router->addRoute('reviews/:ID', 'DELETE', 'ApiComentariosController', 'eliminarComentario'); //baja de comentario

$router->addRoute('productos','GET','ApiProductosController','getProductos');


// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

