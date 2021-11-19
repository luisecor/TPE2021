<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class UsuariosView{

    private $smarty;

    function __construct($CATEGORIAS,$logueado = false) {
        $this->smarty = new Smarty();
        $this->smarty->assign('CATEGORIAS', $CATEGORIAS);
        $this->smarty->assign('logueado', $logueado);
        $this->smarty->assign('base_url', BASE_URL);
    }

    function showFormNewUser($error = "") {
        $this->smarty->assign('titulo','Registrarse');
        $this->smarty->assign('logueado', false);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/forms/newUser.tpl');

    } 
    
    function showLogin($error = "") {
        $this->smarty->assign('titulo', 'Log in');
        $this->smarty->assign('logueado', false);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/forms/login.tpl');
    }

    function showHome() {
        header("Location: ".BASE_URL."home");
    }

    function showUsuarios($usuarios) {
        $this->smarty->assign('logueado', true);
        $this->smarty->assign('roleUser', 1);
        $this->smarty->assign('usuarios', $usuarios);
        $this->smarty->display('templates/usuariosList.tpl');
    }

    function showFormUser($usuario, $error = "") {
        $this->smarty->assign('logueado', true);
        $this->smarty->assign('roleUser', 1);
        $this->smarty->assign('usuario', $usuario);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/forms/formUsuarioUpdate.tpl');
    }
}