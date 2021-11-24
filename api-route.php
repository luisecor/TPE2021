<?php

require_once 'libs\Router.php';
require_once 'Controller/ApiComentariosController.php';
require_once 'Controller/ApiProductosController.php';

$router = new Router();

//comentarios
$router->addRoute('reviews/product/:ID', 'GET', 'ApiComentariosController', 'getComentarios'); //--> Traer todos los comentarios de un cierto proucto
$router->addRoute('reviews/product/:ID', 'POST', 'ApiComentariosController', 'insertarComentario');
$router->addRoute('reviews/:ID', 'GET', 'ApiComentariosController', 'getComentario');
$router->addRoute('reviews/:ID', 'DELETE', 'ApiComentariosController', 'eliminarComentario'); //baja de comentario

$router->addRoute('productos','GET','ApiProductosController','getProductos');


// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

