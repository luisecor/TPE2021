<?php



class ProductoModel{ 

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
    }

    function getProducts(){
        $sentencia = $this->db->prepare("SELECT producto.id_producto,producto.nombre,producto.precio,producto.fk_categoria,producto.descripcion, categoria.nombre as categoria  FROM producto INNER JOIN categoria ON producto.fk_categoria = categoria.id_categoria order by nombre asc"); 
        $sentencia->execute();
        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }

    function eliminarProductoDeDB($id){
        $sentencia = $this->db->prepare("DELETE FROM producto WHERE id_producto=?");
        $sentencia->execute(array($id));
    }

   function getProductsByCategoria($id){
    $sentencia = $this->db->prepare("SELECT producto.id_producto, producto.nombre, producto.precio, producto.fk_categoria, producto.descripcion, categoria.nombre as categoria  FROM producto INNER JOIN categoria ON producto.fk_categoria = categoria.id_categoria WHERE fk_categoria=? order by nombre asc");
    $sentencia->execute([$id]); 
    $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $productos;
   }


   function addProducto($nombre, $precio, $categoria, $descripcion ){       
       $sentencia = $this->db->prepare("INSERT INTO producto (nombre, precio, fk_categoria, descripcion) VALUES (?,?,?,?)");
       $sentencia->execute(array($nombre,$precio,$categoria,$descripcion));       

   }


   function updateProduct ($id, $nombre, $descripcion, $precio, $categoria){
       $sentencia = $this->db->prepare("UPDATE producto SET nombre=? , precio=?, fk_categoria=?, descripcion=? WHERE id_producto = ?");
       $sentencia->execute(array($nombre,$precio,$categoria,$descripcion,$id));
   }

   function getProduct($id) {
       $sentencia = $this->db->prepare("SELECT producto.id_producto,producto.nombre,producto.precio,producto.fk_categoria,producto.descripcion, categoria.nombre as categoria  FROM producto INNER JOIN categoria ON producto.fk_categoria = categoria.id_categoria WHERE id_producto = ? ");
       $sentencia->execute(array($id));
       $producto = $sentencia->fetch(PDO::FETCH_OBJ);
       return $producto;
   }

   function searchClave($clave) {
       echo("ENTRASTE AL SEARCH");
       $sentencia = $this->db->prepare("SELECT nombre FROM producto WHERE nombre = ? UNION SELECT nombre FROM categoria WHERE nombre = ?");
       $sentencia->execute(array($clave,$clave));
       $serched = $sentencia->fetchAll(PDO::FETCH_OBJ);
       var_dump($serched);
   }
    
}