<?php

class ComentariosModel {

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function getReviews($id_producto) {
        $sentencia = $this->db->prepare("SELECT * FROM productoreview WHERE id_producto = ?"); 
        $sentencia->execute();
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }

    function eliminarComentario($id_comentario) {
        $sentencia = $this->db->prepare("DELETE FROM productoreview WHERE id_review = ?");
        $response = $sentencia->execute(array($id_comentario));
    }

    function getComentario($id_comentario) {
        $sentencia = $this->db->prepare( "SELECT * FROM productoreview WHERE id_review = ?");
        $sentencia->execute(array($id_comentario));
        $comentario = $sentencia->fetch(PDO::FETCH_OBJ);
        return $comentario;
    }

    function insertarComentario() {
        
    }
}