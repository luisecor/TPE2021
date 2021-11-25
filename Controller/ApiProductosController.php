<?php

///Habiamos hecho este controller para hacer los filtros avanzaos por VUE.JS
///Lo terminamos haciendo por Smarty, pero este controller funciona para el univo ENDPOINT que lo solicita

require_once 'View/ApiView.php';
require_once 'Model/ProductoModel.php';
require_once 'Model/CategoriaModel.php';

class ApiProductosController {
    private $model;
    private $modelCategorias;
    private $view;

    function __construct() {
        $this->model = new ProductoModel();
        $this->view = new ApiView();
        $this->modelCategorias = new CategoriaModel();
    }

    private function incluye($categoria){
        $categoriasDB = $this->modelCategorias->getCategorias();
        foreach ($categoriasDB as $categoriaDB) {
           if ($categoriaDB->id_categoria == $categoria)
            return true;
        }
        return false;
    }

    function getProductos($params = null){
        
        $productosDB = $this->model->getProducts();
        $maxPrice = 0;

        foreach ($productosDB as $producto) {
            if ($producto->precio > $maxPrice)
            $maxPrice=$producto->precio;
        }

        if (isset($_GET['maxPrice']) && $_GET['maxPrice']>= 0 && $_GET['maxPrice'] <= $maxPrice){
           // echo("HAY MAX PRICE   ");
            if (isset($_GET['categoria']) ) {
                $productos = $this->model->getProductsFiltros($_GET['categoria'],$_GET['maxPrice']);
            } else {
               // echo("   Sin categoria");
                $productos = $this->model->getProductsFiltros(null,$_GET['maxPrice']);
            }          
        } else {
            if (isset($_GET['categoria']) ){
               // echo("Entraste por categorias");
                $productos = $this->model->getProductsFiltros($_GET['categoria']);
            } else 
            $productos = $this->model->getProducts();
        }

        if ($productos){
            $this->view->response($productos, 200);
        } else{
            $this->view->response("No hay productos en la base de datos que coincidan con el filtro", 204);
        }

    }


}