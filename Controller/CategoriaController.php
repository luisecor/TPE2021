<?php

require_once './Model/CategoriaModel.php';
require_once './Model/ProductoModel.php';
require_once './View/CategoriaView.php';
require_once './Helpers/AuthHelper.php';

class CategoriaController{

    private $categoriaModel;
    private $productoModel;
    private $categoriaView;
    private $productoView;
    private $authHelper;


    function __construct(){
        $this->categoriaModel = new CategoriaModel();
        $this->productoModel = new ProductoModel();
        $this->authHelper = new AuthHelper();
        $this->categoriaView = new CategoriaView( $this->categoriaModel->getCategorias());
        $this->productoView = new ProductoView( $this->categoriaModel->getCategorias());
<<<<<<< HEAD
=======
        

    }
    ///Habia creado esta funcion prque necesitaba cargar los atributos
    /*function cargarProductosYCategoria(){
        $this->PRODUCTOS = $this->model->getProducts();
        $this->CATEGORIAS = $this->model->getCategorias();
    }*/

    function searchClave(){
        //echo("CONTROLLER");
        //echo($_REQUEST['search']);
        $clave = $_REQUEST['search'];
        if ($clave){
            $searched = $this->productoModel->searchClave($clave);
            if ($searched){
                print_r ($searched);
            }
        } else {
          //  $this->view->
        } 
>>>>>>> f7178db6cd6a26ab22e12ab686e2934b619de894
    }

    function showHome(){
        $this->categoriaView->renderHome($this->authHelper->loggedIn());
    }

    function getCategorias(){
        $productos = $this->productoModel->getProducts();
        $categorias = $this->categoriaModel->getCategorias();
        $this->categoriaView->showCategorias($categorias, $productos, $this->authHelper->loggedIn());
    }

    function verPorCategoria($id){
        $productos = $this->productoModel->getProductsByCategoria($id);
        $this->productoView->showProducts($productos, $this->authHelper->loggedIn());
    }

    function showFormCategorias(){
        $this->categoriaView->showFormCategorias();

    }

    function addCategoria (){
        $this->authHelper->checkLoggedIn();
        if (isset($_REQUEST['nombre']) && !empty($_REQUEST['nombre'])){
            $this->categoriaModel->addCategoria($_REQUEST['nombre']);
            header("Location: ".BASE_URL."verCategorias"); //Pusimos por el refresco
        }
    }

    function eliminarCategoria($id){
        $productos = $this->productoModel->getProductsByCategoria($id);
        if(sizeof($productos) == 0) {
            $this->categoriaModel->eliminarCategoria($id);
            header("Location: ".BASE_URL."verCategorias");
        } else {
            $error = 'No es posible eliminar categoría con productos vinculados';
<<<<<<< HEAD
            $this->categoriaView->showCategoriaS($this->categoriaModel->getCategorias(), $this->productoModel->getProducts(), $this->authHelper->loggedIn(), $error);
=======
            $this->categoriaView->showCategoriaS($this->categoriaModel->getCategorias(),$this->productoModel->getProducts(), $this->authHelper->loggedIn(), $error);
>>>>>>> f7178db6cd6a26ab22e12ab686e2934b619de894
        }
    }

    function updateCategoriaMenu($id){
        $categoria = $this->categoriaModel->getCategoria($id);
        $this->categoriaView->showFormCategorias($categoria);
    }

    function updateCategoria(){
        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['nombre'];
        $this->categoriaModel->updateCategoria($id,$nombre);
        header("Location: ".BASE_URL."verCategorias"); 
    }

}