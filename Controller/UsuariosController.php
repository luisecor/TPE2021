<?php

require_once 'View/UsuariosView.php';
require_once 'Model/UsuariosModel.php';
require_once 'Helpers/AuthHelper.php';
require_once 'Model/CategoriaModel.php';
require_once 'Model/ComentariosModel.php';


class UsuariosController {

    private $model;
    private $comentariosModel;
    private $categoriasModel;
    private $view;
    private $authHelper;

    function __construct(){
        $this->model = new UsuariosModel();
        $this->comentariosModel = new ComentariosModel();
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
                if(session_status() === PHP_SESSION_NONE) session_start();  
                $_SESSION['email'] = $email;
                $_SESSION['roleUser'] = $user->roleUser;
                $_SESSION['id_user'] = $user->id_user;
                $this->view->showHome();
            } else {
                $this->view->showLogin("Acceso denegado");
            }
        }
    }

    function logout(){
        if ($this->authHelper->loggedIn()){
            session_destroy();
        }
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

    function showUsuarios() {
        $this->authHelper->checkLoggedIn();
        if($this->authHelper->getRole() == 1) {
            $usuarios = $this->model->getUsaurios();
            $this->view->showUsuarios($usuarios);
        } else {
            header("Location: ".BASE_URL."home"); 
        }
    }

    function eliminarUsuario($id) {
        $comentarios = $this->comentariosModel->getComentarioByUserID($id);
        if (!$comentarios){
            $this->model->eliminarUsuario($id);
            header("Location: ".BASE_URL."home"); 
        } else {
            $error = "No es posible eliminar usuario dado que tiene comentarios asociados";
            $usuarios = $this->model->getUsaurios();
            $this->view->showUsuarios($usuarios,$error);
        }
        
    }

    function showFormUser($id) {
        $usuario = $this->model->getUserById($id);
        if ($usuario) {
            $this->authHelper->checkLoggedIn();
            $this->view->showFormUser($usuario);
        } 
    }

    function updateUsuario() {
        if (isset($_REQUEST['email']) && isset($_REQUEST['role']) && $_REQUEST['role'] > 0  && $_REQUEST['role'] < 3) {
        $this->model->updateUsuario($_REQUEST['id_user'], $_REQUEST['email'], $_REQUEST['role']);
        $this->showUsuarios();
        } else {
            $error = 'Par??metros mal ingresados';
            $this->view->showFormUser($this->model->getUserById($_REQUEST['id_user']), $error);
        } 
    }

}