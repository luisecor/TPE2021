<?php

require_once './View/LoginView.php';

class AuthHelper{

    private $viewLogin;


    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['email'])) {
            
            
            header("Location: ".BASE_URL);
        }
    }

    function loggedIn(){
        session_start();
        return isset($_SESSION['email']);
    }
}