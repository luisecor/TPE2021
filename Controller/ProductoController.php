<?php


require_once './Model/ProductoModel.php';
require_once './Model/CategoriaModel.php';
require_once './View/ProductoView.php';


class ProductoController {

    private $productoModel;
    private $productoView;
    private $categoriaModel;
    private $authHelper;



    function __construct()
    {
        $this->productoModel = new ProductoModel();
        $this->categoriaModel = new CategoriaModel();
        $this->authHelper = new AuthHelper();
        $this->productoView = new ProductoView($this->categoriaModel->getCategorias(),false);
        
    }

    function eliminarProducto($id){
        $this->productoModel->eliminarProductoDeDB($id);
        header("Location: ".BASE_URL."verProductos"); 
    }

    function getProducts(){
        $productos = $this->productoModel->getProducts();
        $this->productoView->showProducts($productos, $this->authHelper->loggedIn());
    }

    function showFormProductos(){
        $this->authHelper->checkLoggedIn();
        $this->productoView->showFormProductos($this->categoriaModel->getCategorias());

    }

    function showProduct($id){
        $producto = $this->productoModel->getProduct($id);
        $this->productoView->showProduct($producto);
    }
    

    function addProducto(){
        $this->authHelper->checkLoggedIn();
        if (isset($_REQUEST['nombre']) && !empty($_REQUEST['nombre'])
            && isset($_REQUEST['precio']) && $_REQUEST['precio']>=0
            && isset($_REQUEST['categoria'])
            && isset($_REQUEST['descripcion']) ){ //Consultar si con el EMPTY es suficiente, Preguntar si se puede poner REQUIRED en el FORM
               //addProducto($nombre, $precio, $categoria, $descripcion )
               $this->productoModel->addProducto($_REQUEST['nombre'], $_REQUEST['precio'],$_REQUEST['categoria'], $_REQUEST['descripcion']);
               header("Location: ".BASE_URL."verProductos"); //Pusimos esto para que cuano refresques la pagina no te vuelva a agregar el mismo elmenento
                
        } else {
            //Hubo un error
            //$this->view->formAddProducto("Revisar que los campos sean correctos");
        }

    }

    
    function updateProductoMenu($id){
        $producto = $this->productoModel->getProduct($id);
        if ( $producto) {
            $this->authHelper->checkLoggedIn();
            $this->productoView->updateProductoMenu($producto, $this->categoriaModel->getCategorias());
        } else {
            echo "PRODUCTO INEXISTENTE";
        }        
    }

    function updateProducto(){
       
        if (isset($_REQUEST['nombre']) && !empty($_REQUEST['nombre'])
            && isset($_REQUEST['precio']) && $_REQUEST['precio']>0
            && isset($_REQUEST['categoria'])
            && isset($_REQUEST['descripcion']) ){
           
            $this->productoModel->updateProduct($_REQUEST['id'], $_REQUEST['nombre'],$_REQUEST['descripcion'], $_REQUEST['precio'], $_REQUEST['categoria']);
            $this->getProducts();
        } else {
            echo "ALGO MAL SETEADO";
        }

    }

}









