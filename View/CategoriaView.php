<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class CategoriaView{

    private $smarty;

    function __construct($CATEGORIAS,$logueado = false)
    {
        $this->smarty = new Smarty();
        $this->smarty->assign('CATEGORIAS', $CATEGORIAS);
        $this->smarty->assign('logueado', $logueado);
        $this->smarty->assign('base_url',BASE_URL);
    }

    function renderHome($logueado) {
        $this->smarty->assign('logueado', $logueado);
        $this->smarty->display('./templates/home.tpl');
    }

    function showCategoriaS($categorias,$prouctos, $logueado, $error = null){
        $this->smarty->assign('base_url',BASE_URL);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('productos', $prouctos);
        $this->smarty->assign('logueado', $logueado);
        $this->smarty->assign('error', $error);
        $this->smarty->display('./templates/categoriasList.tpl'); 
    }

    function showFormCategorias($categoria = null){
        $this->smarty->assign('logueado', true);
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->display('./templates/forms/formCategoria.tpl');

    }

    function serchClave($clave){
        
    }

   
}