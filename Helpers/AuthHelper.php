<?php


class AuthHelper{


    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['email'])) {
            header("Location: ".BASE_URL);
        }
    }

    function getRole(){
        session_start();
        if(isset($_SESSION['email'])){
            return  $_SESSION['roleUser'];
        } else {
            return 0;
        }
    }

    function getEmail(){
        session_start();
        if(isset($_SESSION['email'])){
            return  $_SESSION['email'];
        } else {
            return null;
        }

    }

    function loggedIn(){
        return $this->getRole() > 0;
    }


}