<?php

class ProductoModel{ 

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function getProducts(){
        $sentencia = $this->db->prepare("SELECT producto.id_producto,producto.nombre,producto.precio,producto.fk_categoria,producto.descripcion, producto.imagen, categoria.nombre as categoria  FROM producto INNER JOIN categoria ON producto.fk_categoria = categoria.id_categoria order by nombre asc"); 
        $sentencia->execute();
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }

    function getProductsFiltros($categoria = null, $maxPrice = null){
        //echo($categoria . "  ". $maxPrice." ") ;
       

        $filtro="";
        $array="";

       if ($categoria && $categoria>0){
           if ($maxPrice && $maxPrice>0){
                $filtro="WHERE fk_categoria = ? AND precio <= ?";
                $array = array($categoria,$maxPrice);
           } else {
                $filtro="WHERE fk_categoria = ?";
                $array = array($categoria);
           }
           
       } else {
        if ($maxPrice && $maxPrice>0){
            $filtro = "WHERE precio <= ?";
            $array = array($maxPrice);
        } else{

           $filtro = "WHERE precio <= ?";
           $array = array("0");}
       }
        
        $sentencia = $this->db->prepare("SELECT producto.id_producto, producto.nombre, producto.precio, producto.fk_categoria, producto.descripcion, producto.imagen, categoria.nombre as categoria  FROM producto INNER JOIN categoria ON producto.fk_categoria = categoria.id_categoria $filtro");
        $sentencia->execute($array);
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
       // print_r($productos);
        return $productos;

                
    }

    function eliminarProductoDeDB($id){
        $sentencia = $this->db->prepare("DELETE FROM producto WHERE id_producto=?");
        $sentencia->execute(array($id));
    }

   function getProductsByCategoria($id){
    $sentencia = $this->db->prepare("SELECT producto.id_producto, producto.nombre, producto.precio, producto.fk_categoria, producto.descripcion, producto.imagen, categoria.nombre as categoria  FROM producto INNER JOIN categoria ON producto.fk_categoria = categoria.id_categoria WHERE fk_categoria=? order by nombre asc");
    $sentencia->execute([$id]); 
    $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $productos;
   }


   function addProducto($nombre, $precio, $categoria, $descripcion, $imagen = null){
        $pathImg = null;
        if ($imagen) {
            $pathImg = $this->uploadImage($imagen);
        }
       $sentencia = $this->db->prepare("INSERT INTO producto (nombre, precio, fk_categoria, descripcion, imagen) VALUES (?, ?, ?, ?, ?)");
       $sentencia->execute(array($nombre, $precio, $categoria, $descripcion, $pathImg));       
   }

   private function uploadImage($imagen){
        $target = "img/product/" . uniqid("", true) . "." . strtolower(pathinfo($imagen['name'], PATHINFO_EXTENSION));  //generamos un codigo unico
        move_uploaded_file($imagen['tmp_name'], $target); 
        return $target;
    }

   function updateProduct ($id, $nombre, $descripcion, $precio, $categoria, $imagen = null) {
        $pathImg = null;
        if ($imagen) {
            $pathImg = $this->uploadImage($imagen);
        }
       $sentencia = $this->db->prepare("UPDATE producto SET nombre=? , precio=?, fk_categoria=?, descripcion=?, imagen=? WHERE id_producto = ?");
       $sentencia->execute(array($nombre, $precio, $categoria, $descripcion, $pathImg, $id));
   }

   function getProduct($id) {
       $sentencia = $this->db->prepare("SELECT producto.id_producto,producto.nombre,producto.precio,producto.fk_categoria,producto.descripcion, producto.imagen, categoria.nombre as categoria  FROM producto INNER JOIN categoria ON producto.fk_categoria = categoria.id_categoria WHERE id_producto = ? ");
       $sentencia->execute(array($id));
       $producto = $sentencia->fetch(PDO::FETCH_OBJ);
       return $producto;
   }

   function searchClave($clave) {
       echo("ENTRASTE AL SEARCH MODEL");
       $sentencia = $this->db->prepare("SELECT nombre, 'Producto' AS tipo FROM producto WHERE nombre = ? UNION SELECT nombre, 'Categoria' AS tipo FROM categoria WHERE nombre = ?");
       $sentencia->execute(array($clave,$clave));
       $serched = $sentencia->fetchAll(PDO::FETCH_OBJ);
       return $serched;
   }
    
}