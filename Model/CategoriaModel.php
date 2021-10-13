<?php

class CategoriaModel {

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function getCategoria($id) {
        $sentencia = $this->db->prepare("SELECT *  FROM categoria WHERE id_categoria = ? ");
        $sentencia->execute(array($id));
        $producto = $sentencia->fetch(PDO::FETCH_OBJ);
        return $producto;
    }

    function getCategorias(){
        $sentencia = $this->db->prepare("SELECT * FROM categoria ORDER BY nombre ASC"); 
        $sentencia->execute();
        $categorias = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
    }

    function addCategoria($nombre){
        $sentencia = $this->db->prepare("INSERT INTO categoria(nombre) VALUES(?)");
        $sentencia->execute(array($nombre));
    }

    function eliminarCategoria($id){
        $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id_categoria=?");
        $sentencia->execute(array($id));
    }

    function updateCategoria($id,$nombre){
        $sentencia = $this->db->prepare("UPDATE categoria SET nombre=? WHERE id_categoria = ? ");
        $sentencia->execute(array($nombre,$id));
    }
}