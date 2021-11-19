<?php

require_once 'Vuew/ApiView.php';
//agrego el model 

class ApiController {

    private $model;
    private $view;

    function __construct(){
        $this->model = new ComentariosModel();
        $this->view = new ApiView();
    }

    function getComentarios($params = null) {
        $idProducto = $params[":ID"];
        $reviews = $this->model->getReviews($idProducto);
        if ($reviews) {
            $this->view->response($reviews, 200);
        } else {
            $this->view->response("No hay comentarios para el producto con el id=$idProducto", 200); 
        }
    }

    function eliminarComentario($params = null) {
        $idComentario = $params[":ID"];
        $comentario = $this->model->getComentario($idComentario);
        if ($comentario) {
            $this->model->eliminarComentario($idComentario);
            $this->view->response("La tarea con el id=$idComentario fue borrada", 200);
        } else {
            $this->view->response("La tarea con el id=$idComentario no existe", 404);
        }
    }

    function insertarComentario($params = null) {
        $body = $this->getBody();
        $id = $this->model->insertarComentario($body->review, $body->id_user);
        if ($id != 0) {
            $this->view->response("La tarea se insertó con el id=$id", 200);
        } else {
            $this->view->response("La tarea no se pudo insertar", 500);
        }

    }


    
    //Leer cuerpo del mensaje. Devuelve el body del request
    //Permite leer la entrada enviada en formato RAW
    //Similar a $_POST, excepto que:
    //No es un arreglo, es un string de los datos crudos
    //No importa que verbo se uso (POST, GET, PUT, ...)
    protected function getBody(){
        $bodyString = file_get_contents("php://input");//Convertir el string recibido a JSON
        return json_decode($bodyString); //Devuelve un objeto JSON
    }

}