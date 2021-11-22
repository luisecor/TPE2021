<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class ProductoView {

    private $smarty;

    function __construct($CATEGORIAS) {
        $this->smarty = new Smarty();
        $this->smarty->assign('CATEGORIAS', $CATEGORIAS);
        $this->smarty->assign('logueado', false);
        $this->smarty->assign('base_url', BASE_URL);
    }


    function showProducts($productos, $roleUser, $logueado){
        $this->smarty->assign('productos', $productos);
        $this->smarty->assign('roleUser', $roleUser);
        $this->smarty->assign('logueado', $logueado);
        $this->smarty->display('./templates/productsList.tpl'); 
     }

     
     function updateProductoMenu($producto, $categorias, $logueado = true){
        $this->smarty->assign("producto", $producto);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('logueado', $logueado);
        $this->smarty->display('./templates/forms/formProductoUpdate.tpl');
     }
 
     function showProduct($producto, $roleUser, $logueado){
        $this->smarty->assign("producto", $producto);
        $this->smarty->assign('roleUser', $roleUser);
        $this->smarty->assign('logueado', $logueado);       
        $this->smarty->display('./templates/product.tpl');
     }

     function showFormProductos($categorias) {
        $this->smarty->assign('roleUser', 1);
        $this->smarty->assign('logueado', true);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('./templates/forms/formProducto.tpl');
    }
}