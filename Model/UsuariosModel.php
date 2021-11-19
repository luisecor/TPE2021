<?php

class UsuariosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', ''); 
    }

    function getUser($email){
        $query = $this->db->prepare('SELECT * FROM usuario WHERE email = ?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function insertNewUser($email, $password){
        $query = $this->db->prepare('INSERT INTO usuario (email, password) VALUES (?, ?)');
        $query->execute([$email, $password]);
    }

    function getUsaurios() {
        $sentencia = $this->db->prepare("SELECT * FROM usuario"); 
        $sentencia->execute();
        $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $usuarios;
    }

    function eliminarUsuario($id) {
        $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id_user = ?");
        $sentencia->execute(array($id));
    }

    function updateUsuario($id, $email, $role) {
        $sentencia = $this->db->prepare("UPDATE usuario SET email = ? , roleUser = ? WHERE id_user = ?");
        $sentencia->execute(array($email, $role, $id));
    }

    function getUserById($id){
        $query = $this->db->prepare('SELECT * FROM usuario WHERE id_user = ?');
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

}