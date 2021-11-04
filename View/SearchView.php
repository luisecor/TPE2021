<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';


class SearchView{
    
    private $smarty;

    function __construct($CATEGORIAS,$logueado = false)
    {
        $this->smarty = new Smarty();
        $this->smarty->assign('CATEGORIAS', $CATEGORIAS);
        $this->smarty->assign('logueado', $logueado);
        $this->smarty->assign('base_url',BASE_URL);
    }


}