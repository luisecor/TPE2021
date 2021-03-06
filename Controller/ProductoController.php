<?php


require_once './Model/ProductoModel.php';
require_once './Model/CategoriaModel.php';
require_once './View/ProductoView.php';
require_once './Model/ComentariosModel.php';


class ProductoController {

    private $productoModel;
    private $productoView;
    private $categoriaModel;
    private $authHelper;
    private $comentariosModel;

    function __construct() {
        $this->productoModel = new ProductoModel();
        $this->categoriaModel = new CategoriaModel();
        $this->authHelper = new AuthHelper();
        $this->productoView = new ProductoView($this->categoriaModel->getCategorias(), $this->authHelper->loggedIn()); 
        $this->comentariosModel = new ComentariosModel(); 
    }

    function eliminarProducto($id){
        //Elimina el producto solo si esta loggeado y si el rol es administrador
        if ($this->authHelper->loggedIn() && $this->authHelper->getRole() == 1){
            $comentarios = $this->comentariosModel->getComentariosByIdProducto($id);
            if(!$comentarios) {
                $this->productoModel->eliminarProductoDeDB($id);
                header("Location: ".BASE_URL."verProductos"); 
            } else {
                $error = 'No es posible eliminar el producto porque hay comentarios vinculados. Primero eliminarlos.';
                $this->productoView->showProducts($this->productoModel->getProducts(), $this->authHelper->getRole(), $this->authHelper->loggedIn(), null, $error);
            }
        }
        
    }

    function getProducts(){
        $productos = $this->productoModel->getProducts();
        $maxPrice = 0;
        foreach ($productos as $producto) {
            if ($producto->precio > $maxPrice)
            $maxPrice=$producto->precio;
        }
        $this->productoView->showProducts($productos, $this->authHelper->getRole(), $this->authHelper->loggedIn(),$maxPrice);
    }

    function showFormProductos(){
        //Se pueden agregar nuevos productos solo si estas loggeado y si el rol es administrador
        $this->authHelper->checkLoggedIn();
        if($this->authHelper->getRole() == 1) {
            $this->productoView->showFormProductos($this->categoriaModel->getCategorias());
        } else {
            header("Location: ".BASE_URL."home"); 
        }
    }

    function showProduct($id) {
        $producto = $this->productoModel->getProduct($id);
        $this->productoView->showProduct($producto, $this->authHelper->getRole(),$this->authHelper->loggedIn(),$this->authHelper->getUserID());
    }
    

    function addProducto() {
        $this->authHelper->checkLoggedIn();
        if (isset($_REQUEST['nombre']) && !empty($_REQUEST['nombre'])
            && isset($_REQUEST['precio']) && $_REQUEST['precio']>=0
            && isset($_REQUEST['categoria'])
            && isset($_REQUEST['descripcion']) ) { 
                if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png") {
                    $this->productoModel->addProducto($_REQUEST['nombre'], $_REQUEST['precio'],$_REQUEST['categoria'], $_REQUEST['descripcion'], $_FILES['input_name']['tmp_name']); 
                } else {
                    $this->productoModel->addProducto($_REQUEST['nombre'], $_REQUEST['precio'],$_REQUEST['categoria'], $_REQUEST['descripcion']);
                } 

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
                if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png") {
                    $this->productoModel->updateProduct($_REQUEST['id'], $_REQUEST['nombre'], $_REQUEST['descripcion'], $_REQUEST['precio'], $_REQUEST['categoria'], $_FILES['input_name']); 
                } else {
                    $this->productoModel->updateProduct($_REQUEST['id'], $_REQUEST['nombre'],$_REQUEST['descripcion'], $_REQUEST['precio'], $_REQUEST['categoria']);
                }

            $this->getProducts();
        } 
    }

    function filtroAvanzado(){

        $productosDB = $this->productoModel->getProducts();
        $maxPrice = 0;

        foreach ($productosDB as $producto) {
            if ($producto->precio > $maxPrice)
            $maxPrice=$producto->precio;
        }

        if (isset($_GET['maxPrice']) && $_GET['maxPrice']>= 0 && $_GET['maxPrice'] <= $maxPrice){
           // echo("HAY MAX PRICE   ");
            if (isset($_GET['categoria']) ) {
                $productos = $this->productoModel->getProductsFiltros($_GET['categoria'],$_GET['maxPrice']);
            } else {
               // echo("   Sin categoria");
                $productos = $this->productoModel->getProductsFiltros(null,$_GET['maxPrice']);
            }          
        } else {
            if (isset($_GET['categoria']) ){
               // echo("Entraste por categorias");
                $productos = $this->productoModel->getProductsFiltros($_GET['categoria']);
            } else 
            $productos = $this->productoModel->getProducts();
        }
        //var_dump($productos);
        $this->productoView->showProducts($productos, $this->authHelper->getRole(), $this->authHelper->loggedIn(),$maxPrice);
    }

}









