<?php

require_once 'libs/Router.php';

$router = new Router();

//comentarios
$router->addRoute('reviews', 'GET', 'ApiComentariosController', 'getComentarios');
$router->addRoute('reviews/:ID', 'GET', 'ApiComentariosController', 'getComentario');
$router->addRoute('reviews', 'POST', 'ApiComentariosController', 'insertarComentario'); //alta de comentario
$router->addRoute('reviews/:ID', 'DELETE', 'ApiComentariosController', 'eliminarComentario'); //baja de comentario


// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

