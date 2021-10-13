<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class LoginView {

    private $smarty;

    function __construct($CATEGORIAS) { 
        $this->smarty = new Smarty();
        $this->smarty->assign('CATEGORIAS', $CATEGORIAS);
       // $this->smarty->assign('logueado', $logueado);
        $this->smarty->assign('base_url',BASE_URL);
    }

    function showLogin($error = ""){
        $this->smarty->assign('titulo', 'Log in');
        $this->smarty->assign('logueado', false);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/forms/login.tpl');
    }

    function showHome(){
        header("Location: ".BASE_URL."home");
    }

    
}