<?php

require_once 'View/ApiView.php';
require_once 'Model/ComentariosModel.php';

class ApiComentariosController {

    private $model;
    private $view;

    function __construct(){
        $this->model = new ComentariosModel();
        $this->view = new ApiView();
    }

    function getComentarios($params = null) {
        //Trae comentarios de un producto especifico
        $idProducto = $params[":ID"];

        if (isset($_GET['filtro'])){
            if (isset($_GET['order'])){
                ///Tiene seteado el filtro y el orden
                $reviews = $this->model->getReviews($idProducto,$_GET['filtro'],$_GET['order']);
            } else {
                ///Solo tiene seteado el filtro
                $reviews = $this->model->getReviews($idProducto,$_GET['filtro'],"asc");
            }
        } else {
            $reviews = $this->model->getReviews($idProducto);
        }

        
        if ($reviews) {
            $this->view->response($reviews, 200);
        } else {
            $this->view->response("No hay comentarios para el producto con el id=$idProducto", 204); 
        }
    }

    function getComentario($params = null ){
        $idComentario = $params[":ID"];
        $reviews = $this->model->getComentario($idComentario);
        if ($reviews) {
            $this->view->response($reviews, 200);
        } else {
            $this->view->response("No existe comentario con el id=$idComentario", 204); 
        }

    }

    function eliminarComentario($params = null) {
        $idComentario = $params[":ID"];
        $comentario = $this->model->getComentario($idComentario);
        if ($comentario) {
            $this->model->eliminarComentario($idComentario);
            $this->view->response("El comentario con el id=$idComentario fue borrado", 200);
        } else {
            $this->view->response("El comentario con el id=$idComentario no existe", 404);
        }
    }

    function insertarComentario($params = null) {
        $body = $this->getBody();        
        if(isset($body->review) && isset($body->id_user) && $body->puntaje < 6 && $body->puntaje > 0) {
            $id = $this->model->insertarComentario($body->review, $body->id_producto , $body->puntaje, $body->id_user);
            if ($id != 0) {
                $this->view->response("El comentario se insertó con el id=$id", 200);
            } else {
                $this->view->response("El comentario no se pudo insertar", 500);
            } 
        } else {
            $this->view->response('No es posible insertar el comentario',500); //que error le mando?
        }
    }

    private function getBody(){
        $bodyString = file_get_contents("php://input");//Convertir el string recibido a JSON
        return json_decode($bodyString); //Devuelve un objeto JSON
    }

}