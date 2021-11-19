<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class CategoriaView{

    private $smarty;

    function __construct($CATEGORIAS, $logueado = false)
    {
        $this->smarty = new Smarty();
        $this->smarty->assign('CATEGORIAS', $CATEGORIAS);
        $this->smarty->assign('logueado', $logueado);
        $this->smarty->assign('base_url',BASE_URL);
    }

    function renderHome($logueado, $roleUser) {
        $this->smarty->assign('logueado', $logueado);
        $this->smarty->assign('roleUser', $roleUser);
        $this->smarty->display('./templates/home.tpl');
    }

    function showCategoriaS($categorias, $prouctos, $logueado, $roleUser, $error = null){
        var_dump($roleUser);
        $this->smarty->assign('base_url', BASE_URL);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('productos', $prouctos);
        $this->smarty->assign('logueado', $logueado);
        $this->smarty->assign('roleUser', $roleUser);
        $this->smarty->assign('error', $error);
        $this->smarty->display('./templates/categoriasList.tpl'); 
    }

    function showFormCategorias($categoria = null) {
        $this->smarty->assign('roleUser', 1);
        $this->smarty->assign('logueado', true);
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->display('./templates/forms/formCategoria.tpl');

    }

   
}

