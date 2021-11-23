<?php


class AuthHelper{


    function checkLoggedIn(){
        if(session_status() === PHP_SESSION_NONE) session_start();
        if(!isset($_SESSION['email'])) {
            header("Location: ".BASE_URL);
        }
    }

    function getRole(){
        if(session_status() === PHP_SESSION_NONE) session_start();
        if(isset($_SESSION['email'])){
            return  $_SESSION['roleUser'];
        } else {
            return 0;
        }
    }

    function getEmail(){
        if(session_status() === PHP_SESSION_NONE) session_start();
        if(isset($_SESSION['email'])){
            return  $_SESSION['email'];
        } else {
            return null;
        }

    }

    function loggedIn(){
        return $this->getRole() > 0;
    }

    function getUserID(){
        if(session_status() === PHP_SESSION_NONE) session_start();
        if(isset($_SESSION['id_user'])){
            return  $_SESSION['id_user'];
        } else {
            return null;
        }
    }


}