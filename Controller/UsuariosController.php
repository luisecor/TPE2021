<?php

require_once 'View/UsuariosView.php';
require_once 'Model/UsuariosModel.php';
require_once 'Helpers/AuthHelper.php';
require_once 'Model/CategoriaModel.php';


class UsuariosController {

    private $model;
    private $categoriasModel;
    private $view;
    private $authHelper;

    function __construct(){
        $this->model = new UsuariosModel();
        $this->categoriasModel = new CategoriaModel();
        $this->authHelper = new AuthHelper();
        $this->view = new UsuariosView($this->categoriasModel->getCategorias(), false);
        
    }

    function showLogin(){
        if($this->authHelper->loggedIn()) {
            header("Location: ".BASE_URL."home"); 
        }
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
                $_SESSION['roleUser'] = $user->roleUser;
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

    function formNewUser(){
        if($this->authHelper->loggedIn()) {
            header("Location: ".BASE_URL."home"); 
        }
        $this->view->showFormNewUser();       
    }

    function newUser(){
        if(!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $user = $this->model->getUser($email);
            if(!$user) { 
                $this->model->insertNewUser($email, $password);
                $this->verifyLogin();
            } else {
                $error = 'Usuario existente';
                $this->view->showFormNewUser($error);
            }
        }
    }

}