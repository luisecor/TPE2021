<?php

require_once './View/LoginView.php';

class AuthHelper{

    private $viewLogin;

  /*  function __construct() {
        $this->viewLogin = new LoginView($CATEGORIAS);

        
    }*/

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['email'])) {
            //$this->viewLogin->showLogin();
            
            header("Location: ".BASE_URL);
        }
    }

    function loggedIn(){
        session_start();
        return isset($_SESSION['email']);
    }
}