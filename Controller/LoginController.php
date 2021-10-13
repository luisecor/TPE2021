<?php

require_once './Model/LoginModel.php';
require_once './Model/CategoriaModel.php';
require_once './View/LoginView.php';


class LoginController {

    private $model;
    private $view;
    private $categoriasModel;
    private $authHelper;
 

    function __construct(){
        $this->categoriasModel = new CategoriaModel();
        $this->authHelper = new AuthHelper();
        $this->model = new LoginModel();
        $this->view = new LoginView($this->categoriasModel->getCategorias(),false);
       
    }

    function showLogin(){
        $this->view->showLogin();
    }

    function verifyLogin(){
        if(!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->model->getUser($email);

            if($user && password_verify($password, $user->password)) {
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['role'] = $email;
                $this->view->showHome();
            } else {
                $this->view->showLogin("Acceso denegado");
            }
        }
    }

    function logout(){
        session_start();
        session_destroy();
        $this->view->showLogin("Deslogueado");
    }


 

  
}