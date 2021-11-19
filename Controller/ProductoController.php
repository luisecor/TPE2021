<?php


require_once './Model/ProductoModel.php';
require_once './Model/CategoriaModel.php';
require_once './View/ProductoView.php';


class ProductoController {

    private $productoModel;
    private $productoView;
    private $categoriaModel;
    private $authHelper;

//Agregamos mensajes de error?

    function __construct() {
        $this->productoModel = new ProductoModel();
        $this->categoriaModel = new CategoriaModel();
        $this->authHelper = new AuthHelper();
        $this->productoView = new ProductoView($this->categoriaModel->getCategorias(), false);  
    }

    function eliminarProducto($id){
        $this->productoModel->eliminarProductoDeDB($id);
        header("Location: ".BASE_URL."verProductos"); 
    }

    function getProducts(){
        $productos = $this->productoModel->getProducts();
        $this->productoView->showProducts($productos, $this->authHelper->getRole(), $this->authHelper->loggedIn());
    }

    function showFormProductos(){
        $this->authHelper->checkLoggedIn();
        if($this->authHelper->getRole() == 1) {
            $this->productoView->showFormProductos($this->categoriaModel->getCategorias());
        } else {
            header("Location: ".BASE_URL."home"); 
        }

    }

    function showProduct($id) {
        $producto = $this->productoModel->getProduct($id);
        
        $this->productoView->showProduct($producto);
    }
    

    function addProducto() {
        $this->authHelper->checkLoggedIn();
        if (isset($_REQUEST['nombre']) && !empty($_REQUEST['nombre'])
            && isset($_REQUEST['precio']) && $_REQUEST['precio']>=0
            && isset($_REQUEST['categoria'])
            && isset($_REQUEST['descripcion']) ){ 
               $this->productoModel->addProducto($_REQUEST['nombre'], $_REQUEST['precio'],$_REQUEST['categoria'], $_REQUEST['descripcion']);
               header("Location: ".BASE_URL."verProductos"); 
        } 

    }

    
    function updateProductoMenu($id) {
        $producto = $this->productoModel->getProduct($id);
        if ($producto) {
            $this->authHelper->checkLoggedIn();
            $this->productoView->updateProductoMenu($producto, $this->categoriaModel->getCategorias());
        }       
    }

    function updateProducto(){
        if (isset($_REQUEST['nombre']) && !empty($_REQUEST['nombre'])
            && isset($_REQUEST['precio']) && $_REQUEST['precio']>0
            && isset($_REQUEST['categoria'])
            && isset($_REQUEST['descripcion']) ) {
            $this->productoModel->updateProduct($_REQUEST['id'], $_REQUEST['nombre'],$_REQUEST['descripcion'], $_REQUEST['precio'], $_REQUEST['categoria']);
            $this->getProducts();
        } 
    }

}









