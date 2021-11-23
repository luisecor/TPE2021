<?php

class ComentariosModel {

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function getReviews($id_producto) {
        
        $sentencia = $this->db->prepare("SELECT productoreview.id_review, productoreview.id_producto, productoreview.id_user, productoreview.review, productoreview.puntaje, usuario.email as user
                                        FROM productoreview
                                        INNER JOIN usuario ON productoreview.id_user = usuario.id_user WHERE id_producto = ?"); 
        $sentencia->execute(array($id_producto));
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }

    function eliminarComentario($id_comentario) {
        $sentencia = $this->db->prepare("DELETE FROM productoreview WHERE id_review = ?");
        $sentencia->execute(array($id_comentario));
    }

    function getComentario($id_comentario) {
        $sentencia = $this->db->prepare( "SELECT * FROM productoreview WHERE id_review = ?");
        $sentencia->execute(array($id_comentario));
        $comentario = $sentencia->fetch(PDO::FETCH_OBJ);
        return $comentario;
    }

    function insertarComentario($review, $id_producto, $puntaje, $id_user) {
        $sentencia = $this->db->prepare("INSERT INTO productoreview(id_producto, id_user, puntaje, review) VALUES(?, ?, ?, ?)");
        $sentencia->execute(array($id_producto, $id_user,$puntaje, $review ));
        return $this->db->lastInsertId();

    }
}