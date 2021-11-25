<?php

class ComentariosModel {

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function getReviews($id_producto, $filtro=null, $order = null, $where = null) {

        //echo($where);
        $filter="";

        $orderBy = [
            "asc" => " ASC",
            "desc" => " DESC"
        ];
        if (isset($orderBy[$order]))
            $order=$orderBy[$order];
            else
            $order = " ASC";

        $filterBy = [
            "id" => "ORDER BY id_review",
            "antiq" => "ORDER BY id_review",
            "puntaje" => "ORDER BY puntaje"
        ];

        if ($where){
            $array = array ($id_producto,$where);
            $filter = "AND puntaje = ?";
        } else
            $array = array($id_producto);

        if (isset($filterBy[$filtro]))
            $filter = $filter . $filterBy[$filtro] . $order;
            else
            $filter =$filter . "";
        
        $sentencia = $this->db->prepare("SELECT productoreview.id_review, productoreview.id_producto, productoreview.id_user, productoreview.review, productoreview.puntaje, usuario.email as user
                                        FROM productoreview
                                        INNER JOIN usuario ON productoreview.id_user = usuario.id_user WHERE id_producto = ? $filter"); 
        $sentencia->execute($array);
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }

    function eliminarComentario($id_comentario){ 
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

    function getComentariosByIdProducto($id_producto) {
        $sentencia = $this->db->prepare( "SELECT * FROM productoreview WHERE id_producto = ?");
        $sentencia->execute(array($id_producto));
        $comentario = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentario;
    }
}