<?php

require_once 'libs/Router.php';

$router = new Router();

//comentarios
$router->addRoute('comentarios', 'GET', 'ApiComentarioController', 'getComentarios');
$router->addRoute('comentarios/:ID', 'GET', 'ApiComentarioController', 'getComentario');
$router->addRoute('comentarios', 'POST', 'ApiComentarioController', 'insertarComentario'); //alta de comentario
$router->addRoute('comentarios/:ID', 'PUT', 'ApiComentarioController', 'updateComentario'); //modificacion
$router->addRoute('comentarios/:ID', 'DELETE', 'ApiComentarioController', 'deleteComentario'); //baja de comentario


// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

